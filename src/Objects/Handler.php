<?php

namespace Moonspot\Kubernetes\Objects;

class Handler extends \Moonspot\Kubernetes\BaseObject {

    /**
     * One and only one of the following should be specified. Exec specifies
     * the action to take.
     */
    public ?ExecAction $exec = null;

    /**
     * HTTPGet specifies the http request to perform.
     */
    public ?HTTPGetAction $httpGet = null;

    /**
     * TCPSocket specifies an action involving a TCP port. TCP hooks not yet
     * supported
     */
    public ?TCPSocketAction $tcpSocket = null;

    public function __construct() {
        $this->exec = new ExecAction();
        $this->httpGet = new HTTPGetAction();
        $this->tcpSocket = new TCPSocketAction();
    }
}
