<?php

namespace Moonspot\Kubernetes\Objects;

class SessionAffinityConfig extends \Moonspot\Kubernetes\BaseObject {

    /**
     * clientIP contains the configurations of Client IP based session
     * affinity.
     */
    public ?ClientIPConfig $clientIP = null;

    public function __construct() {
        $this->clientIP = new ClientIPConfig();
    }
}
