<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\KeyToPathSet;

class ConfigMapProjection extends \Moonspot\Kubernetes\BaseObject {

    /**
     * If unspecified, each key-value pair in the Data field of the referenced
     * ConfigMap will be projected into the volume as a file whose name is the
     * key and content is the value. If specified, the listed keys will be
     * projected into the specified paths, and unlisted keys will not be
     * present. If a key is specified which is not present in the ConfigMap,
     * the volume setup will error unless it is marked optional. Paths must be
     * relative and may not contain the '..' path or start with '..'.
     */
    public ?KeyToPathSet $items = null;

    /**
     * Name of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     */
    public ?string $name = null;

    /**
     * Specify whether the ConfigMap or its keys must be defined
     */
    public ?bool $optional = null;

    public function __construct() {
        $this->items = new KeyToPathSet();
    }
}
