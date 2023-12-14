<?php

namespace Moonspot\Kubernetes\Objects;

class ParamRef extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name of the resource being referenced.
     */
    public ?string $name = null;

    /**
     * Namespace of the referenced resource. Should be empty for the
     * cluster-scoped resources
     */
    public ?string $namespace = null;
}
