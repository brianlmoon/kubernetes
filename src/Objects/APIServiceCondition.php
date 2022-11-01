<?php

namespace Moonspot\Kubernetes\Objects;

class APIServiceCondition extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Last time the condition transitioned from one status to another.
     */
    public ?Time $lastTransitionTime = null;

    /**
     * Human-readable message indicating details about last transition.
     */
    public ?string $message = null;

    /**
     * Unique, one-word, CamelCase reason for the condition's last transition.
     */
    public ?string $reason = null;

    /**
     * Status is the status of the condition. Can be True, False, Unknown.
     */
    public string $status;

    /**
     * Type is the type of the condition.
     */
    public string $type;

    public function __construct() {
        $this->lastTransitionTime = new Time();
    }
}
