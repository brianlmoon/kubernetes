<?php

namespace Moonspot\Kubernetes\Objects;

class ResourceClaimSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Allocation can start immediately or when a Pod wants to use the
     * resource. "WaitForFirstConsumer" is the default.
     */
    public ?string $allocationMode = null;

    /**
     * ParametersRef references a separate object with arbitrary parameters
     * that will be used by the driver when allocating a resource for the
     * claim.
     * 
     * The object must be in the same namespace as the ResourceClaim.
     */
    public ?ResourceClaimParametersReference $parametersRef = null;

    /**
     * ResourceClassName references the driver and additional parameters via
     * the name of a ResourceClass that was created as part of the driver
     * deployment.
     */
    public string $resourceClassName;

    public function __construct() {
        $this->parametersRef = new ResourceClaimParametersReference();
    }
}
