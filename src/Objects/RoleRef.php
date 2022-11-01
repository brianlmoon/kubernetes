<?php

namespace Moonspot\Kubernetes\Objects;

class RoleRef extends \Moonspot\Kubernetes\BaseObject {

    /**
     * APIGroup is the group for the resource being referenced
     */
    public string $apiGroup;

    /**
     * Kind is the type of resource being referenced
     */
    public string $kind;

    /**
     * Name is the name of resource being referenced
     */
    public string $name;
}
