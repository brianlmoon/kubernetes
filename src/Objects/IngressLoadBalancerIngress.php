<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\IngressPortStatusSet;

class IngressLoadBalancerIngress extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Hostname is set for load-balancer ingress points that are DNS based.
     */
    public ?string $hostname = null;

    /**
     * IP is set for load-balancer ingress points that are IP based.
     */
    public ?string $ip = null;

    /**
     * Ports provides information about the ports exposed by this LoadBalancer.
     */
    public ?IngressPortStatusSet $ports = null;

    public function __construct() {
        $this->ports = new IngressPortStatusSet();
    }
}
