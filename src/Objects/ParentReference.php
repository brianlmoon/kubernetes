<?php

namespace Moonspot\Kubernetes\Objects;

class ParentReference extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Group is the group of the object being referenced.
     */
    public ?string $group = null;

    /**
     * Name is the name of the object being referenced.
     */
    public ?string $name = null;

    /**
     * Namespace is the namespace of the object being referenced.
     */
    public ?string $namespace = null;

    /**
     * Resource is the resource of the object being referenced.
     */
    public ?string $resource = null;
}
