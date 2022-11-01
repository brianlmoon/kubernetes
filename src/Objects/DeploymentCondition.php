<?php

namespace Moonspot\Kubernetes\Objects;

class DeploymentCondition extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Last time the condition transitioned from one status to another.
     */
    public ?Time $lastTransitionTime = null;

    /**
     * The last time this condition was updated.
     */
    public ?Time $lastUpdateTime = null;

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
     * Type of deployment condition.
     */
    public string $type;

    public function __construct() {
        $this->lastTransitionTime = new Time();
        $this->lastUpdateTime = new Time();
    }
}
