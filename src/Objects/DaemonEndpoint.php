<?php

namespace Moonspot\Kubernetes\Objects;

class DaemonEndpoint extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Port number of the given endpoint.
     */
    public int $Port;
}
