<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class ResourceClaimSchedulingStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name matches the pod.spec.resourceClaims[*].Name field.
     */
    public ?string $name = null;

    /**
     * UnsuitableNodes lists nodes that the ResourceClaim cannot be allocated
     * for.
     * 
     * The size of this field is limited to 128, the same as for
     * PodSchedulingSpec.PotentialNodes. This may get increased in the future,
     * but not reduced.
     */
    public ?StringSet $unsuitableNodes = null;

    public function __construct() {
        $this->unsuitableNodes = new StringSet();
    }
}
