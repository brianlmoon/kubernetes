<?php

namespace Moonspot\Kubernetes\Objects;

class DownwardAPIVolumeFile extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Required: Selects a field of the pod: only annotations, labels, name and
     * namespace are supported.
     */
    public ?ObjectFieldSelector $fieldRef = null;

    /**
     * Optional: mode bits used to set permissions on this file, must be an
     * octal value between 0000 and 0777 or a decimal value between 0 and 511.
     * YAML accepts both octal and decimal values, JSON requires decimal values
     * for mode bits. If not specified, the volume defaultMode will be used.
     * This might be in conflict with other options that affect the file mode,
     * like fsGroup, and the result can be other mode bits set.
     */
    public ?int $mode = null;

    /**
     * Required: Path is  the relative path name of the file to be created.
     * Must not be absolute or contain the '..' path. Must be utf-8 encoded.
     * The first item of the relative path must not start with '..'
     */
    public string $path;

    /**
     * Selects a resource of the container: only resources limits and requests
     * (limits.cpu, limits.memory, requests.cpu and requests.memory) are
     * currently supported.
     */
    public ?ResourceFieldSelector $resourceFieldRef = null;

    public function __construct() {
        $this->fieldRef = new ObjectFieldSelector();
        $this->resourceFieldRef = new ResourceFieldSelector();
    }
}