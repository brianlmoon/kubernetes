<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\ReplicaSetConditionSet;

class ReplicaSetStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The number of available replicas (ready for at least minReadySeconds)
     * for this replica set.
     */
    public ?int $availableReplicas = null;

    /**
     * Represents the latest available observations of a replica set's current
     * state.
     */
    public ?ReplicaSetConditionSet $conditions = null;

    /**
     * The number of pods that have labels matching the labels of the pod
     * template of the replicaset.
     */
    public ?int $fullyLabeledReplicas = null;

    /**
     * ObservedGeneration reflects the generation of the most recently observed
     * ReplicaSet.
     */
    public ?int $observedGeneration = null;

    /**
     * The number of ready replicas for this replica set.
     */
    public ?int $readyReplicas = null;

    /**
     * Replicas is the most recently oberved number of replicas. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller/#what-is-a-replicationcontroller
     */
    public int $replicas;

    public function __construct() {
        $this->conditions = new ReplicaSetConditionSet();
    }
}