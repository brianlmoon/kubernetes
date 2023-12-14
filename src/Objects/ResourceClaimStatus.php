<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\ResourceClaimConsumerReferenceSet;

class ResourceClaimStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Allocation is set by the resource driver once a resource or set of
     * resources has been allocated successfully. If this is not specified, the
     * resources have not been allocated yet.
     */
    public ?AllocationResult $allocation = null;

    /**
     * DeallocationRequested indicates that a ResourceClaim is to be
     * deallocated.
     * 
     * The driver then must deallocate this claim and reset the field together
     * with clearing the Allocation field.
     * 
     * While DeallocationRequested is set, no new consumers may be added to
     * ReservedFor.
     */
    public ?bool $deallocationRequested = null;

    /**
     * DriverName is a copy of the driver name from the ResourceClass at the
     * time when allocation started.
     */
    public ?string $driverName = null;

    /**
     * ReservedFor indicates which entities are currently allowed to use the
     * claim. A Pod which references a ResourceClaim which is not reserved for
     * that Pod will not be started.
     * 
     * There can be at most 32 such reservations. This may get increased in the
     * future, but not reduced.
     */
    public ?ResourceClaimConsumerReferenceSet $reservedFor = null;

    public function __construct() {
        $this->allocation = new AllocationResult();
        $this->reservedFor = new ResourceClaimConsumerReferenceSet();
    }
}
