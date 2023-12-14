<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\IngressLoadBalancerIngressSet;

class IngressLoadBalancerStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Ingress is a list containing ingress points for the load-balancer.
     */
    public ?IngressLoadBalancerIngressSet $ingress = null;

    public function __construct() {
        $this->ingress = new IngressLoadBalancerIngressSet();
    }
}
