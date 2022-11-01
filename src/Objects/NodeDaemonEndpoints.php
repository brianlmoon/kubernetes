<?php

namespace Moonspot\Kubernetes\Objects;

class NodeDaemonEndpoints extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Endpoint on which Kubelet is listening.
     */
    public ?DaemonEndpoint $kubeletEndpoint = null;

    public function __construct() {
        $this->kubeletEndpoint = new DaemonEndpoint();
    }
}
