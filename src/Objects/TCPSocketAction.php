<?php

namespace Moonspot\Kubernetes\Objects;

class TCPSocketAction extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Optional: Host name to connect to, defaults to the pod IP.
     */
    public ?string $host = null;

    /**
     * Number or name of the port to access on the container. Number must be in
     * the range 1 to 65535. Name must be an IANA_SVC_NAME.
     */
    public IntOrString $port;

    public function __construct() {
        $this->port = new IntOrString();
    }
}
