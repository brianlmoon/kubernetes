<?php

namespace Moonspot\Kubernetes\Objects;

class PodCondition extends \Moonspot\Kubernetes\BaseObject {

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
     * Unique, one-word, CamelCase reason for the condition's last transition.
     */
    public ?string $reason = null;

    /**
     * Status is the status of the condition. Can be True, False, Unknown. More
     * info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-conditions
     */
    public string $status;

    /**
     * Type is the type of the condition. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-conditions
     * 
     * Possible enum values:
     *  - `"ContainersReady"` indicates whether all containers in the pod are
     * ready.
     *  - `"Initialized"` means that all init containers in the pod have
     * started successfully.
     *  - `"PodScheduled"` represents status of the scheduling process for this
     * pod.
     *  - `"Ready"` means the pod is able to service requests and should be
     * added to the load balancing pools of all matching services.
     */
    public string $type;

    public function __construct() {
        $this->lastProbeTime = new Time();
        $this->lastTransitionTime = new Time();
    }
}
