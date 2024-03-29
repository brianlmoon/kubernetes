<?php

namespace Moonspot\Kubernetes\Objects;

class EndpointAddress extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The Hostname of this endpoint
     */
    public ?string $hostname = null;

    /**
     * The IP of this endpoint. May not be loopback (127.0.0.0/8 or ::1),
     * link-local (169.254.0.0/16 or fe80::/10), or link-local multicast
     * (224.0.0.0/24 or ff02::/16).
     */
    public string $ip;

    /**
     * Optional: Node hosting this endpoint. This can be used to determine
     * endpoints local to a node.
     */
    public ?string $nodeName = null;

    /**
     * Reference to object providing the endpoint.
     */
    public ?ObjectReference $targetRef = null;

    public function __construct() {
        $this->targetRef = new ObjectReference();
    }
}
