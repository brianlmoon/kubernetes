<?php

namespace Moonspot\Kubernetes\Objects;

class AllocationResult extends \Moonspot\Kubernetes\BaseObject {

    /**
     * This field will get set by the resource driver after it has allocated
     * the resource driver to inform the scheduler where it can schedule Pods
     * using the ResourceClaim.
     * 
     * Setting this field is optional. If null, the resource is available
     * everywhere.
     */
    public ?NodeSelector $availableOnNodes = null;

    /**
     * ResourceHandle contains arbitrary data returned by the driver after a
     * successful allocation. This is opaque for Kubernetes. Driver
     * documentation may explain to users how to interpret this data if needed.
     * 
     * The maximum size of this field is 16KiB. This may get increased in the
     * future, but not reduced.
     */
    public ?string $resourceHandle = null;

    /**
     * Shareable determines whether the resource supports more than one
     * consumer at a time.
     */
    public ?bool $shareable = null;

    public function __construct() {
        $this->availableOnNodes = new NodeSelector();
    }
}
