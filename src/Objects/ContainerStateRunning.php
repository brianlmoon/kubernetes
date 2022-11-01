<?php

namespace Moonspot\Kubernetes\Objects;

class ContainerStateRunning extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Time at which the container was last (re-)started
     */
    public ?Time $startedAt = null;

    public function __construct() {
        $this->startedAt = new Time();
    }
}
