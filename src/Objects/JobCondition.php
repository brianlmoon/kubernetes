<?php

namespace Moonspot\Kubernetes\Objects;

class JobCondition extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Last time the condition was checked.
     */
    public ?Time $lastProbeTime = null;

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
     * Type of job condition, Complete or Failed.
     * 
     * Possible enum values:
     *  - `"Complete"` means the job has completed its execution.
     *  - `"Failed"` means the job has failed its execution.
     *  - `"Suspended"` means the job has been suspended.
     */
    public string $type;

    public function __construct() {
        $this->lastProbeTime = new Time();
        $this->lastTransitionTime = new Time();
    }
}
