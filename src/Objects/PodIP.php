<?php

namespace Moonspot\Kubernetes\Objects;

class PodIP extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ip is an IP address (IPv4 or IPv6) assigned to the pod
     */
    public ?string $ip = null;
}
