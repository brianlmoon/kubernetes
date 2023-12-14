<?php

namespace Moonspot\Kubernetes\Objects;

class IngressPortStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * error is to record the problem with the service port The format of the
     * error shall comply with the following rules: - built-in error values
     * shall be specified in this file and those shall use
     *   CamelCase names
     * - cloud provider specific error values must have names that comply with
     * the
     *   format foo.example.com/CamelCase.
     */
    public ?string $error = null;

    /**
     * port is the port number of the ingress port.
     */
    public int $port;

    /**
     * protocol is the protocol of the ingress port. The supported values are:
     * "TCP", "UDP", "SCTP"
     */
    public string $protocol;
}
