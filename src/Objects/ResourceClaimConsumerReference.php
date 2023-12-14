<?php

namespace Moonspot\Kubernetes\Objects;

class ResourceClaimConsumerReference extends \Moonspot\Kubernetes\BaseObject {

    /**
     * APIGroup is the group for the resource being referenced. It is empty for
     * the core API. This matches the group in the APIVersion that is used when
     * creating the resources.
     */
    public ?string $apiGroup = null;

    /**
     * Name is the name of resource being referenced.
     */
    public string $name;

    /**
     * Resource is the type of resource being referenced, for example "pods".
     */
    public string $resource;

    /**
     * UID identifies exactly one incarnation of the resource.
     */
    public string $uid;
}
