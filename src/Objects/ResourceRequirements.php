<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\ResourceClaimSet;

class ResourceRequirements extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Claims lists the names of resources, defined in spec.resourceClaims,
     * that are used by this container.
     * 
     * This is an alpha field and requires enabling the
     * DynamicResourceAllocation feature gate.
     * 
     * This field is immutable.
     */
    public ?ResourceClaimSet $claims = null;

    /**
     * Limits describes the maximum amount of compute resources allowed. More
     * info:
     * https://kubernetes.io/docs/concepts/configuration/manage-resources-containers/
     */
    public ?array $limits = null;

    /**
     * Requests describes the minimum amount of compute resources required. If
     * Requests is omitted for a container, it defaults to Limits if that is
     * explicitly specified, otherwise to an implementation-defined value. More
     * info:
     * https://kubernetes.io/docs/concepts/configuration/manage-resources-containers/
     */
    public ?array $requests = null;

    public function __construct() {
        $this->claims = new ResourceClaimSet();
    }
}
