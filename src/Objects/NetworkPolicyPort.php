<?php

namespace Moonspot\Kubernetes\Objects;

class NetworkPolicyPort extends \Moonspot\Kubernetes\BaseObject {

    /**
     * If set, indicates that the range of ports from port to endPort,
     * inclusive, should be allowed by the policy. This field cannot be defined
     * if the port field is not defined or if the port field is defined as a
     * named (string) port. The endPort must be equal or greater than port.
     * This feature is in Beta state and is enabled by default. It can be
     * disabled using the Feature Gate "NetworkPolicyEndPort".
     */
    public ?int $endPort = null;

    /**
     * The port on the given protocol. This can either be a numerical or named
     * port on a pod. If this field is not provided, this matches all port
     * names and numbers. If present, only traffic on the specified protocol
     * AND port will be matched.
     */
    public ?IntOrString $port = null;

    /**
     * The protocol (TCP, UDP, or SCTP) which traffic must match. If not
     * specified, this field defaults to TCP.
     */
    public ?string $protocol = null;

    public function __construct() {
        $this->port = new IntOrString();
    }
}
