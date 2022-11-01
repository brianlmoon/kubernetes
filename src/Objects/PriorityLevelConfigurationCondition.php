<?php

namespace Moonspot\Kubernetes\Objects;

class PriorityLevelConfigurationCondition extends \Moonspot\Kubernetes\BaseObject {

    /**
     * `lastTransitionTime` is the last time the condition transitioned from
     * one status to another.
     */
    public ?Time $lastTransitionTime = null;

    /**
     * `message` is a human-readable message indicating details about last
     * transition.
     */
    public ?string $message = null;

    /**
     * `reason` is a unique, one-word, CamelCase reason for the condition's
     * last transition.
     */
    public ?string $reason = null;

    /**
     * `status` is the status of the condition. Can be True, False, Unknown.
     * Required.
     */
    public ?string $status = null;

    /**
     * `type` is the type of the condition. Required.
     */
    public ?string $type = null;

    public function __construct() {
        $this->lastTransitionTime = new Time();
    }
}
