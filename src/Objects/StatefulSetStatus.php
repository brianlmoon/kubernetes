<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StatefulSetConditionSet;

class StatefulSetStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Total number of available pods (ready for at least minReadySeconds)
     * targeted by this statefulset.
     */
    public ?int $availableReplicas = null;

    /**
     * collisionCount is the count of hash collisions for the StatefulSet. The
     * StatefulSet controller uses this field as a collision avoidance
     * mechanism when it needs to create the name for the newest
     * ControllerRevision.
     */
    public ?int $collisionCount = null;

    /**
     * Represents the latest available observations of a statefulset's current
     * state.
     */
    public ?StatefulSetConditionSet $conditions = null;

    /**
     * currentReplicas is the number of Pods created by the StatefulSet
     * controller from the StatefulSet version indicated by currentRevision.
     */
    public ?int $currentReplicas = null;

    /**
     * currentRevision, if not empty, indicates the version of the StatefulSet
     * used to generate Pods in the sequence [0,currentReplicas).
     */
    public ?string $currentRevision = null;

    /**
     * observedGeneration is the most recent generation observed for this
     * StatefulSet. It corresponds to the StatefulSet's generation, which is
     * updated on mutation by the API Server.
     */
    public ?int $observedGeneration = null;

    /**
     * readyReplicas is the number of pods created for this StatefulSet with a
     * Ready Condition.
     */
    public ?int $readyReplicas = null;

    /**
     * replicas is the number of Pods created by the StatefulSet controller.
     */
    public int $replicas;

    /**
     * updateRevision, if not empty, indicates the version of the StatefulSet
     * used to generate Pods in the sequence
     * [replicas-updatedReplicas,replicas)
     */
    public ?string $updateRevision = null;

    /**
     * updatedReplicas is the number of Pods created by the StatefulSet
     * controller from the StatefulSet version indicated by updateRevision.
     */
    public ?int $updatedReplicas = null;

    public function __construct() {
        $this->conditions = new StatefulSetConditionSet();
    }
}
