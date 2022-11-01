<?php

namespace Moonspot\Kubernetes\Objects;

class TypedLocalObjectReference extends \Moonspot\Kubernetes\BaseObject {

    /**
     * APIGroup is the group for the resource being referenced. If APIGroup is
     * not specified, the specified Kind must be in the core API group. For any
     * other third-party types, APIGroup is required.
     */
    public ?string $apiGroup = null;

    /**
     * Kind is the type of resource being referenced
     */
    public string $kind;

    /**
     * Name is the name of resource being referenced
     */
    public string $name;
}
