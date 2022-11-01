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
     * 
     * Possible enum values:
     *  - `"DiskPressure"` means the kubelet is under pressure due to
     * insufficient available disk.
     *  - `"MemoryPressure"` means the kubelet is under pressure due to
     * insufficient available memory.
     *  - `"NetworkUnavailable"` means that network for the node is not
     * correctly configured.
     *  - `"PIDPressure"` means the kubelet is under pressure due to
     * insufficient available PID.
     *  - `"Ready"` means kubelet is healthy and ready to accept pods.
     */
    public string $type;

    public function __construct() {
        $this->lastHeartbeatTime = new Time();
        $this->lastTransitionTime = new Time();
    }
}
