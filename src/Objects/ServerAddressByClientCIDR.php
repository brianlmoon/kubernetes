<?php

namespace Moonspot\Kubernetes\Objects;

class ServerAddressByClientCIDR extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The CIDR with which clients can match their IP to figure out the server
     * address that they should use.
     */
    public string $clientCIDR;

    /**
     * Address of this server, suitable for a client that matches the above
     * CIDR. This can be a hostname, hostname:port, IP or IP:port.
     */
    public string $serverAddress;
}
