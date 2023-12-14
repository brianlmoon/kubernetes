<?php

namespace Moonspot\Kubernetes\Objects;

class ResourceClassParametersReference extends \Moonspot\Kubernetes\BaseObject {

    /**
     * APIGroup is the group for the resource being referenced. It is empty for
     * the core API. This matches the group in the APIVersion that is used when
     * creating the resources.
     */
    public ?string $apiGroup = null;

    /**
     * Kind is the type of resource being referenced. This is the same value as
     * in the parameter object's metadata.
     */
    public string $kind;

    /**
     * Name is the name of resource being referenced.
     */
    public string $name;

    /**
     * Namespace that contains the referenced resource. Must be empty for
     * cluster-scoped resources and non-empty for namespaced resources.
     */
    public ?string $namespace = null;
}
