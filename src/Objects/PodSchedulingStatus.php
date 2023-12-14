<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\ResourceClaimSchedulingStatusSet;

class PodSchedulingStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ResourceClaims describes resource availability for each
     * pod.spec.resourceClaim entry where the corresponding ResourceClaim uses
     * "WaitForFirstConsumer" allocation mode.
     */
    public ?ResourceClaimSchedulingStatusSet $resourceClaims = null;

    public function __construct() {
        $this->resourceClaims = new ResourceClaimSchedulingStatusSet();
    }
}
