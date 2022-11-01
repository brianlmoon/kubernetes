<?php

namespace Moonspot\Kubernetes\Objects;

class ResourceFieldSelector extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Container name: required for volumes, optional for env vars
     */
    public ?string $containerName = null;

    /**
     * Specifies the output format of the exposed resources, defaults to "1"
     */
    public ?Quantity $divisor = null;

    /**
     * Required: resource to select
     */
    public string $resource;

    public function __construct() {
        $this->divisor = new Quantity();
    }
}
