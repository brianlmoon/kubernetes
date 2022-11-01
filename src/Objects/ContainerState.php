<?php

namespace Moonspot\Kubernetes\Objects;

class ContainerState extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Details about a running container
     */
    public ?ContainerStateRunning $running = null;

    /**
     * Details about a terminated container
     */
    public ?ContainerStateTerminated $terminated = null;

    /**
     * Details about a waiting container
     */
    public ?ContainerStateWaiting $waiting = null;

    public function __construct() {
        $this->running = new ContainerStateRunning();
        $this->terminated = new ContainerStateTerminated();
        $this->waiting = new ContainerStateWaiting();
    }
}
