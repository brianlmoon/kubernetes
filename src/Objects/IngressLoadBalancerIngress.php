<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\IngressPortStatusSet;

class IngressLoadBalancerIngress extends \Moonspot\Kubernetes\BaseObject {

    /**
     * hostname is set for load-balancer ingress points that are DNS based.
     */
    public ?string $hostname = null;

    /**
     * ip is set for load-balancer ingress points that are IP based.
     */
    public ?string $ip = null;

    /**
     * ports provides information about the ports exposed by this LoadBalancer.
     */
    public ?IngressPortStatusSet $ports = null;

    public function __construct() {
        $this->ports = new IngressPortStatusSet();
    }
}
