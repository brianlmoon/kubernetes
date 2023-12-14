<?php

namespace Moonspot\Kubernetes\Objects;

class ResourceClaimParametersReference extends \Moonspot\Kubernetes\BaseObject {

    /**
     * APIGroup is the group for the resource being referenced. It is empty for
     * the core API. This matches the group in the APIVersion that is used when
     * creating the resources.
     */
    public ?string $apiGroup = null;

    /**
     * Kind is the type of resource being referenced. This is the same value as
     * in the parameter object's metadata, for example "ConfigMap".
     */
    public string $kind;

    /**
     * Name is the name of resource being referenced.
     */
    public string $name;
}
