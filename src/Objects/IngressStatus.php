<?php

namespace Moonspot\Kubernetes\Objects;

class IngressStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * LoadBalancer contains the current status of the load-balancer.
     */
    public ?IngressLoadBalancerStatus $loadBalancer = null;

    public function __construct() {
        $this->loadBalancer = new IngressLoadBalancerStatus();
    }
}
