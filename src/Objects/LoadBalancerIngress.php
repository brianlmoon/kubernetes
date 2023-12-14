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
     * IPMode specifies how the load-balancer IP behaves, and may only be
     * specified when the ip field is specified. Setting this to "VIP"
     * indicates that traffic is delivered to the node with the destination set
     * to the load-balancer's IP and port. Setting this to "Proxy" indicates
     * that traffic is delivered to the node or pod with the destination set to
     * the node's IP and node port or the pod's IP and port. Service
     * implementations may use this information to adjust traffic routing.
     */
    public ?string $ipMode = null;

    /**
     * Ports is a list of records of service ports If used, every port defined
     * in the service should have an entry in it
     */
    public ?PortStatusSet $ports = null;

    public function __construct() {
        $this->ports = new PortStatusSet();
    }
}
