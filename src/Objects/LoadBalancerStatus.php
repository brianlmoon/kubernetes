<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\LoadBalancerIngressSet;

class LoadBalancerStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Ingress is a list containing ingress points for the load-balancer.
     * Traffic intended for the service should be sent to these ingress points.
     */
    public ?LoadBalancerIngressSet $ingress = null;

    public function __construct() {
        $this->ingress = new LoadBalancerIngressSet();
    }
}
