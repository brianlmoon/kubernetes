<?php

namespace Moonspot\Kubernetes\Objects;

class NodeCondition extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Last time we got an update on a given condition.
     */
    public ?Time $lastHeartbeatTime = null;

    /**
     * Last time the condition transit from one status to another.
     */
    public ?Time $lastTransitionTime = null;

    /**
     * Human readable message indicating details about last transition.
     */
    public ?string $message = null;

    /**
     * (brief) reason for the condition's last transition.
     */
    public ?string $reason = null;

    /**
     * Status of the condition, one of True, False, Unknown.
     */
    public string $status;

    /**
     * Type of node condition.
     */
    public string $type;

    public function __construct() {
        $this->lastHeartbeatTime = new Time();
        $this->lastTransitionTime = new Time();
    }
}
