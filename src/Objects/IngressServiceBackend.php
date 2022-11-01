<?php

namespace Moonspot\Kubernetes\Objects;

class IngressServiceBackend extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name is the referenced service. The service must exist in the same
     * namespace as the Ingress object.
     */
    public string $name;

    /**
     * Port of the referenced service. A port name or port number is required
     * for a IngressServiceBackend.
     */
    public ?ServiceBackendPort $port = null;

    public function __construct() {
        $this->port = new ServiceBackendPort();
    }
}
