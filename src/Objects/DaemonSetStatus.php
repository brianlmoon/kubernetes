<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\DaemonSetConditionSet;

class DaemonSetStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Count of hash collisions for the DaemonSet. The DaemonSet controller
     * uses this field as a collision avoidance mechanism when it needs to
     * create the name for the newest ControllerRevision.
     */
    public ?int $collisionCount = null;

    /**
     * Represents the latest available observations of a DaemonSet's current
     * state.
     */
    public ?DaemonSetConditionSet $conditions = null;

    /**
     * The number of nodes that are running at least 1 daemon pod and are
     * supposed to run the daemon pod. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/daemonset/
     */
    public int $currentNumberScheduled;

    /**
     * The total number of nodes that should be running the daemon pod
     * (including nodes correctly running the daemon pod). More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/daemonset/
     */
    public int $desiredNumberScheduled;

    /**
     * The number of nodes that should be running the daemon pod and have one
     * or more of the daemon pod running and available (ready for at least
     * spec.minReadySeconds)
     */
    public ?int $numberAvailable = null;

    /**
     * The number of nodes that are running the daemon pod, but are not
     * supposed to run the daemon pod. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/daemonset/
     */
    public int $numberMisscheduled;

    /**
     * numberReady is the number of nodes that should be running the daemon pod
     * and have one or more of the daemon pod running with a Ready Condition.
     */
    public int $numberReady;

    /**
     * The number of nodes that should be running the daemon pod and have none
     * of the daemon pod running and available (ready for at least
     * spec.minReadySeconds)
     */
    public ?int $numberUnavailable = null;

    /**
     * The most recent generation observed by the daemon set controller.
     */
    public ?int $observedGeneration = null;

    /**
     * The total number of nodes that are running updated daemon pod
     */
    public ?int $updatedNumberScheduled = null;

    public function __construct() {
        $this->conditions = new DaemonSetConditionSet();
    }
}
