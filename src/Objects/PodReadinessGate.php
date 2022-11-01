<?php

namespace Moonspot\Kubernetes\Objects;

class PodReadinessGate extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ConditionType refers to a condition in the pod's condition list with
     * matching type.
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
    public string $conditionType;
}
