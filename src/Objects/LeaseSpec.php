<?php

namespace Moonspot\Kubernetes\Objects;

class LeaseSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * acquireTime is a time when the current lease was acquired.
     */
    public ?MicroTime $acquireTime = null;

    /**
     * holderIdentity contains the identity of the holder of a current lease.
     */
    public ?string $holderIdentity = null;

    /**
     * leaseDurationSeconds is a duration that candidates for a lease need to
     * wait to force acquire it. This is measure against time of last observed
     * renewTime.
     */
    public ?int $leaseDurationSeconds = null;

    /**
     * leaseTransitions is the number of transitions of a lease between
     * holders.
     */
    public ?int $leaseTransitions = null;

    /**
     * renewTime is a time when the current holder of a lease has last updated
     * the lease.
     */
    public ?MicroTime $renewTime = null;

    public function __construct() {
        $this->acquireTime = new MicroTime();
        $this->renewTime = new MicroTime();
    }
}
