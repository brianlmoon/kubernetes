<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\ReplicationControllerConditionSet;

class ReplicationControllerStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The number of available replicas (ready for at least minReadySeconds)
     * for this replication controller.
     */
    public ?int $availableReplicas = null;

    /**
     * Represents the latest available observations of a replication
     * controller's current state.
     */
    public ?ReplicationControllerConditionSet $conditions = null;

    /**
     * The number of pods that have labels matching the labels of the pod
     * template of the replication controller.
     */
    public ?int $fullyLabeledReplicas = null;

    /**
     * ObservedGeneration reflects the generation of the most recently observed
     * replication controller.
     */
    public ?int $observedGeneration = null;

    /**
     * The number of ready replicas for this replication controller.
     */
    public ?int $readyReplicas = null;

    /**
     * Replicas is the most recently observed number of replicas. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#what-is-a-replicationcontroller
     */
    public int $replicas;

    public function __construct() {
        $this->conditions = new ReplicationControllerConditionSet();
    }
}
