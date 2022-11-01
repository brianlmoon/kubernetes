<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\PortStatusSet;

class LoadBalancerIngress extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Hostname is set for load-balancer ingress points that are DNS based
     * (typically AWS load-balancers)
     */
    public ?string $hostname = null;

    /**
     * IP is set for load-balancer ingress points that are IP based (typically
     * GCE or OpenStack load-balancers)
     */
    public ?string $ip = null;

    /**
     * Ports is a list of records of service ports If used, every port defined
     * in the service should have an entry in it
     */
    public ?PortStatusSet $ports = null;

    public function __construct() {
        $this->ports = new PortStatusSet();
    }
}
