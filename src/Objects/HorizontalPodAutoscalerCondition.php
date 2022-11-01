<?php

namespace Moonspot\Kubernetes\Objects;

class HorizontalPodAutoscalerCondition extends \Moonspot\Kubernetes\BaseObject {

    /**
     * lastTransitionTime is the last time the condition transitioned from one
     * status to another
     */
    public ?Time $lastTransitionTime = null;

    /**
     * message is a human-readable explanation containing details about the
     * transition
     */
    public ?string $message = null;

    /**
     * reason is the reason for the condition's last transition.
     */
    public ?string $reason = null;

    /**
     * status is the status of the condition (True, False, Unknown)
     */
    public string $status;

    /**
     * type describes the current condition
     */
    public string $type;

    public function __construct() {
        $this->lastTransitionTime = new Time();
    }
}
