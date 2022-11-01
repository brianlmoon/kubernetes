<?php

namespace Moonspot\Kubernetes\Objects;

class IngressClassParametersReference extends \Moonspot\Kubernetes\BaseObject {

    /**
     * APIGroup is the group for the resource being referenced. If APIGroup is
     * not specified, the specified Kind must be in the core API group. For any
     * other third-party types, APIGroup is required.
     */
    public ?string $apiGroup = null;

    /**
     * Kind is the type of resource being referenced.
     */
    public string $kind;

    /**
     * Name is the name of resource being referenced.
     */
    public string $name;

    /**
     * Namespace is the namespace of the resource being referenced. This field
     * is required when scope is set to "Namespace" and must be unset when
     * scope is set to "Cluster".
     */
    public ?string $namespace = null;

    /**
     * Scope represents if this refers to a cluster or namespace scoped
     * resource. This may be set to "Cluster" (default) or "Namespace". Field
     * can be enabled with IngressClassNamespacedParams feature gate.
     */
    public ?string $scope = null;
}
