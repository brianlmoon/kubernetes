<?php

namespace Moonspot\Kubernetes\Objects;

class ContainerStateTerminated extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Container's ID in the format 'docker://<container_id>'
     */
    public ?string $containerID = null;

    /**
     * Exit status from the last termination of the container
     */
    public int $exitCode;

    /**
     * Time at which the container last terminated
     */
    public ?Time $finishedAt = null;

    /**
     * Message regarding the last termination of the container
     */
    public ?string $message = null;

    /**
     * (brief) reason from the last termination of the container
     */
    public ?string $reason = null;

    /**
     * Signal from the last termination of the container
     */
    public ?int $signal = null;

    /**
     * Time at which previous execution of the container started
     */
    public ?Time $startedAt = null;

    public function __construct() {
        $this->finishedAt = new Time();
        $this->startedAt = new Time();
    }
}
