<?php

namespace Moonspot\Kubernetes\Objects;

class HostIP extends \Moonspot\Kubernetes\BaseObject {

    /**
     * IP is the IP address assigned to the host
     */
    public ?string $ip = null;
}
