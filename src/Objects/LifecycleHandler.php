<?php

namespace Moonspot\Kubernetes\Objects;

class LifecycleHandler extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Exec specifies the action to take.
     */
    public ?ExecAction $exec = null;

    /**
     * HTTPGet specifies the http request to perform.
     */
    public ?HTTPGetAction $httpGet = null;

    /**
     * Deprecated. TCPSocket is NOT supported as a LifecycleHandler and kept
     * for the backward compatibility. There are no validation of this field
     * and lifecycle hooks will fail in runtime when tcp handler is specified.
     */
    public ?TCPSocketAction $tcpSocket = null;

    public function __construct() {
        $this->exec = new ExecAction();
        $this->httpGet = new HTTPGetAction();
        $this->tcpSocket = new TCPSocketAction();
    }
}
