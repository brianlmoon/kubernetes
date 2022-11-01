<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\EndpointAddressSet;
use Moonspot\Kubernetes\Objects\Sets\EndpointPortSet;

class EndpointSubset extends \Moonspot\Kubernetes\BaseObject {

    /**
     * IP addresses which offer the related ports that are marked as ready.
     * These endpoints should be considered safe for load balancers and clients
     * to utilize.
     */
    public ?EndpointAddressSet $addresses = null;

    /**
     * IP addresses which offer the related ports but are not currently marked
     * as ready because they have not yet finished starting, have recently
     * failed a readiness check, or have recently failed a liveness check.
     */
    public ?EndpointAddressSet $notReadyAddresses = null;

    /**
     * Port numbers available on the related IP addresses.
     */
    public ?EndpointPortSet $ports = null;

    public function __construct() {
        $this->addresses = new EndpointAddressSet();
        $this->notReadyAddresses = new EndpointAddressSet();
        $this->ports = new EndpointPortSet();
    }
}
