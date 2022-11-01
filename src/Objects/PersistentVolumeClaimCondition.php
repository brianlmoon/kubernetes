<?php

namespace Moonspot\Kubernetes\Objects;

class PersistentVolumeClaimCondition extends \Moonspot\Kubernetes\BaseObject {

    /**
     * lastProbeTime is the time we probed the condition.
     */
    public ?Time $lastProbeTime = null;

    /**
     * lastTransitionTime is the time the condition transitioned from one
     * status to another.
     */
    public ?Time $lastTransitionTime = null;

    /**
     * message is the human-readable message indicating details about last
     * transition.
     */
    public ?string $message = null;

    /**
     * reason is a unique, this should be a short, machine understandable
     * string that gives the reason for condition's last transition. If it
     * reports "ResizeStarted" that means the underlying persistent volume is
     * being resized.
     */
    public ?string $reason = null;


    public string $status;


    public string $type;

    public function __construct() {
        $this->lastProbeTime = new Time();
        $this->lastTransitionTime = new Time();
    }
}
