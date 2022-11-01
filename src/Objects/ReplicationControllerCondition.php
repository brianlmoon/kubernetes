<?php

namespace Moonspot\Kubernetes\Objects;

class ReplicationControllerCondition extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The last time the condition transitioned from one status to another.
     */
    public ?Time $lastTransitionTime = null;

    /**
     * A human readable message indicating details about the transition.
     */
    public ?string $message = null;

    /**
     * The reason for the condition's last transition.
     */
    public ?string $reason = null;

    /**
     * Status of the condition, one of True, False, Unknown.
     */
    public string $status;

    /**
     * Type of replication controller condition.
     */
    public string $type;

    public function __construct() {
        $this->lastTransitionTime = new Time();
    }
}
