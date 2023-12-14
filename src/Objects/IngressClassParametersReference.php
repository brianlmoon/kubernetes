<?php

namespace Moonspot\Kubernetes\Objects;

class IngressClassParametersReference extends \Moonspot\Kubernetes\BaseObject {

    /**
     * apiGroup is the group for the resource being referenced. If APIGroup is
     * not specified, the specified Kind must be in the core API group. For any
     * other third-party types, APIGroup is required.
     */
    public ?string $apiGroup = null;

    /**
     * kind is the type of resource being referenced.
     */
    public string $kind;

    /**
     * name is the name of resource being referenced.
     */
    public string $name;

    /**
     * namespace is the namespace of the resource being referenced. This field
     * is required when scope is set to "Namespace" and must be unset when
     * scope is set to "Cluster".
     */
    public ?string $namespace = null;

    /**
     * scope represents if this refers to a cluster or namespace scoped
     * resource. This may be set to "Cluster" (default) or "Namespace".
     */
    public ?string $scope = null;
}
