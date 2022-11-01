<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\ConditionSet;

class ServiceStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Current service state
     */
    public ?ConditionSet $conditions = null;

    /**
     * LoadBalancer contains the current status of the load-balancer, if one is
     * present.
     */
    public ?LoadBalancerStatus $loadBalancer = null;

    public function __construct() {
        $this->conditions = new ConditionSet();
        $this->loadBalancer = new LoadBalancerStatus();
    }
}
