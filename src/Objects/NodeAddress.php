<?php

namespace Moonspot\Kubernetes\Objects;

class NodeAddress extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The node address.
     */
    public string $address;

    /**
     * Node address type, one of Hostname, ExternalIP or InternalIP.
     */
    public string $type;
}
