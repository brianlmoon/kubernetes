<?php

namespace Moonspot\Kubernetes\Objects;

class PodIP extends \Moonspot\Kubernetes\BaseObject {

    /**
     * IP is the IP address assigned to the pod
     */
    public ?string $ip = null;
}
