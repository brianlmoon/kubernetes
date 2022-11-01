<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\HPAScalingPolicySet;

class HPAScalingRules extends \Moonspot\Kubernetes\BaseObject {

    /**
     * policies is a list of potential scaling polices which can be used during
     * scaling. At least one policy must be specified, otherwise the
     * HPAScalingRules will be discarded as invalid
     */
    public ?HPAScalingPolicySet $policies = null;

    /**
     * selectPolicy is used to specify which policy should be used. If not set,
     * the default value MaxPolicySelect is used.
     */
    public ?string $selectPolicy = null;

    /**
     * StabilizationWindowSeconds is the number of seconds for which past
     * recommendations should be considered while scaling up or scaling down.
     * StabilizationWindowSeconds must be greater than or equal to zero and
     * less than or equal to 3600 (one hour). If not set, use the default
     * values: - For scale up: 0 (i.e. no stabilization is done). - For scale
     * down: 300 (i.e. the stabilization window is 300 seconds long).
     */
    public ?int $stabilizationWindowSeconds = null;

    public function __construct() {
        $this->policies = new HPAScalingPolicySet();
    }
}
