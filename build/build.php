<?php

const DEFAULT_VERSION = 'v1.25.3';

$opts = getopt("" ,["version:"]);

if(!empty($opts['version'])) {
    $k8s_version = $opts['version'];
} else {
    $k8s_version = DEFAULT_VERSION;
}

$filename = __DIR__ . '/swagger-' . str_replace('.', '-', $k8s_version) . '.json';

if(!file_exists($filename)) {
    file_put_contents($filename, file_get_contents("https://raw.githubusercontent.com/kubernetes/kubernetes/{$k8s_version}/api/openapi-spec/swagger.json"));
}

if(!file_exists($filename) || filesize($filename) === 0) {
    echo "Kubernetes version $k8s_version not found.";
    exit(1);
}

$src_dir = __DIR__ . "/../src/Objects";

if(file_exists($src_dir)) {
    $files = array_merge(
        glob("$src_dir/*.php"),
        glob("$src_dir/Sets/*.php"),
    );
}

if(!file_exists($src_dir)) {
    mkdir($src_dir, 0755, true);
}

if(!file_exists($src_dir . "/Sets")) {
    mkdir($src_dir . "/Sets", 0755, true);
}

foreach($files as $file) {
    unlink($file);
}

$swagger = json_decode(file_get_contents($filename), true);

$sets = [];

foreach($swagger['definitions'] as $kind => $object) {

    $kind = parseKind($kind);

    $fields = [];

    if (!empty($object['properties'])) {

        $class_sets = [];

        $has_non_primitive = false;

        foreach ($object['properties'] as $name => $prop) {

            $name = ltrim($name, '$');
            $name = str_replace("-", "_", $name);

            $field_set = '';

            if (isset($prop['$ref'])) {
                $prop_kind = parseKind($prop['$ref']);
                $prop['type'] = $prop_kind['name'];
            }

            $prop['type'] = normalizeType($prop['type']);

            if ($prop['type'] === 'array' && !empty($prop['items'])) {
                $has_non_primitive = true;
                if (isset($prop['items']['$ref'])) {
                    $sub_kind = parseKind($prop['items']['$ref']);
                    $type = $sub_kind['name'];
                } else {
                    $type = normalizeType($prop['items']['type']);
                }
                if ($type === 'string') {
                    $class_sets[$type] = [
                        'type' => $type,
                        'class' => 'StringSet'
                    ];
                } elseif ($type === 'int') {
                    $class_sets[$type] = [
                        'type' => $type,
                        'class' => 'IntSet'
                    ];
                } elseif ($type === 'Float') {
                    $class_sets[$type] = [
                        'type' => $type,
                        'class' => 'FloatSet'
                    ];
                } else {
                    $class_sets[$type] = [
                        'type' => "{$type}::class",
                        'class' => "{$type}Set"
                    ];
                }
                $prop['type'] = $class_sets[$type]['class'];
                $field_set = $class_sets[$type]['class'];
            } elseif (!in_array($prop['type'], ['string', 'int', 'float', 'array', 'bool'])) {
                $field_set = $prop['type'];
                $has_non_primitive = true;
            }

            $required = false;
            if (in_array($name, $object['required'] ?? [])) {
                $required = true;
            }

            $fields[$name] = [
                'name' => $name,
                'type' => $prop['type'],
                'description' => $prop['description'] ?? '',
                'field_set' => $field_set,
                'required' => $required
            ];
        }
    }

    $class_name = $kind['name'];

    // Namespace is a reserved word
    if ($class_name === 'Namespace') {
        $class_name = 'K8sNamespace';
    }

    $class  = "<?php\n";
    $class .= "\n";
    $class .= "namespace Moonspot\Kubernetes\Objects;\n";
    $class .= "\n";

    if (!empty($class_sets)) {
        foreach ($class_sets as $cs) {
            $class .= "use Moonspot\\Kubernetes\\Objects\\Sets\\{$cs['class']};\n";
        }
        $class .= "\n";
    }

    $class .= "class {$class_name} extends \\Moonspot\\Kubernetes\\BaseObject {\n";

    if (isset($fields['apiVersion'])) {
        $class .= "\n";
        $class .= "    public const KIND = '{$kind['name']}';\n";
        $class .= "\n";
        $class .= "    public const VERSION = '{$kind['version']}';\n";
    }

    foreach ($fields as $field) {
        $desc = trim(wordwrap($field['description'], 72));
        if (!empty($desc)) {
            if (strpos($desc, '*/') === false) {
                $desc = "    /**\n     * " . str_replace("\n", "\n     * ", $desc). "\n     */";
            } else {
                $desc = "    //\n    // " . str_replace("\n", "\n    // ", $desc) . "\n    //";
            }
        }
        $class .= "\n";
        $class .= "$desc\n";
        if (!$field['required']) {
            $class .= "    public ?{$field['type']} \${$field['name']} = null;\n";
        } else {
            $class .= "    public {$field['type']} \${$field['name']};\n";
        }
    }

    if (isset($fields['apiVersion']) || $has_non_primitive) {
        $class .= "\n";
        $class .= "    public function __construct() {\n";
        if (isset($fields['apiVersion'])) {
            $class .= "        \$this->apiVersion = \$this::VERSION;\n";
            $class .= "        \$this->kind = \$this::KIND;\n";
        }
        if ($has_non_primitive) {
            foreach ($fields as $field) {
                if (!empty($field['field_set'])) {
                    $class .= "        \$this->{$field['name']} = new {$field['field_set']}();\n";
                }
            }
        }
        $class .= "    }\n";
    }

    $class .= "}\n";

    parse($class_name, $class);

    $sets = array_merge($sets, $class_sets);
}

foreach($sets as $type => $set) {

    if ($type === 'Namespace') {
        $type = 'K8sNamespace';
        $set['type'] = 'K8s' . $set['type'];
    }

    $set_class  = "<?php\n";
    $set_class .= "\n";
    $set_class .= "namespace Moonspot\Kubernetes\Objects\Sets;\n";
    $set_class .= "\n";
    $set_class .= "use Moonspot\\Kubernetes\\TypedArray;\n";
    if (strpos($set['type'], '::class') !== false) {
        $set_class .= "use Moonspot\\Kubernetes\\Objects\\{$type};\n";
        $set_class .= "\n";
    } else {
        $set['type'] = "'{$set['type']}'";
    }
    $set_class .= "/**\n";
    $set_class .= " * Container for a set of {$type} objects\n";
    $set_class .= " *\n";
    $set_class .= " * @package \Moonspot\Kubernetes\n";
    $set_class .= " */\n";
    $set_class .= "class {$set['class']} extends TypedArray {\n";
    $set_class .= "    public const REQUIRED_TYPE = {$set['type']};\n";
    $set_class .= "}\n";

    parse('Sets/' . $set['class'], $set_class);
}

function parse($name, $class) {
    global $src_dir;
    echo "Writing $name...\n";
    $file = "$src_dir/{$name}.php";
    file_put_contents($file, $class);
}

function parseKind($kind): array {
    $kind = str_replace('#/definitions/', '', $kind);
    $parts = array_reverse(explode(".", $kind));
    $name = normalizeType(array_shift($parts));
    $version = array_shift($parts);
    $group = implode(".", $parts);

    $group = str_replace(
        [
            'api.k8s.io',
            'apps.k8s.io',
            'policy.k8s.io',
            'batch.k8s.io',
            'autoscaling.k8s.io',
            'core.k8s.io',
        ],
        [
            'k8s.io',
            'apps',
            'policy',
            'batch',
            'autoscaling',
            ''
        ],
        $group
    );

    if (!empty($group)) {
        $version = $group . '/' . $version;
    }

    return [
        'name' => $name,
        'version' => $version,
    ];
}

function normalizeType($type) {
    switch ($type) {
        case 'integer':
            $type = 'int';
            break;
        case 'number':
            $type = 'float';
            break;
        case 'boolean':
            $type = 'bool';
            break;
        case 'object':
            $type = 'array';
            break;
    }
    return $type;
}
