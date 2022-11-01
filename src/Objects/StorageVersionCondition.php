<?php

namespace Moonspot\Kubernetes\Objects;

class StorageVersionCondition extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Last time the condition transitioned from one status to another.
     */
    public ?Time $lastTransitionTime = null;

    /**
     * A human readable message indicating details about the transition.
     */
    public ?string $message = null;

    /**
     * If set, this represents the .metadata.generation that the condition was
     * set based upon.
     */
    public ?int $observedGeneration = null;

    /**
     * The reason for the condition's last transition.
     */
    public string $reason;

    /**
     * Status of the condition, one of True, False, Unknown.
     */
    public string $status;

    /**
     * Type of the condition.
     */
    public string $type;

    public function __construct() {
        $this->lastTransitionTime = new Time();
    }
}
