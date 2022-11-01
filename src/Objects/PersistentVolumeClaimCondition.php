<?php

namespace Moonspot\Kubernetes\Objects;

class PersistentVolumeClaimCondition extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Last time we probed the condition.
     */
    public ?Time $lastProbeTime = null;

    /**
     * Last time the condition transitioned from one status to another.
     */
    public ?Time $lastTransitionTime = null;

    /**
     * Human-readable message indicating details about last transition.
     */
    public ?string $message = null;

    /**
     * Unique, this should be a short, machine understandable string that gives
     * the reason for condition's last transition. If it reports
     * "ResizeStarted" that means the underlying persistent volume is being
     * resized.
     */
    public ?string $reason = null;


    public string $status;


    public string $type;

    public function __construct() {
        $this->lastProbeTime = new Time();
        $this->lastTransitionTime = new Time();
    }
}
