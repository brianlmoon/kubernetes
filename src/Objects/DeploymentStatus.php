<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\DeploymentConditionSet;

class DeploymentStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Total number of available pods (ready for at least minReadySeconds)
     * targeted by this deployment.
     */
    public ?int $availableReplicas = null;

    /**
     * Count of hash collisions for the Deployment. The Deployment controller
     * uses this field as a collision avoidance mechanism when it needs to
     * create the name for the newest ReplicaSet.
     */
    public ?int $collisionCount = null;

    /**
     * Represents the latest available observations of a deployment's current
     * state.
     */
    public ?DeploymentConditionSet $conditions = null;

    /**
     * The generation observed by the deployment controller.
     */
    public ?int $observedGeneration = null;

    /**
     * Total number of ready pods targeted by this deployment.
     */
    public ?int $readyReplicas = null;

    /**
     * Total number of non-terminated pods targeted by this deployment (their
     * labels match the selector).
     */
    public ?int $replicas = null;

    /**
     * Total number of unavailable pods targeted by this deployment. This is
     * the total number of pods that are still required for the deployment to
     * have 100% available capacity. They may either be pods that are running
     * but not yet available or pods that still have not been created.
     */
    public ?int $unavailableReplicas = null;

    /**
     * Total number of non-terminated pods targeted by this deployment that
     * have the desired template spec.
     */
    public ?int $updatedReplicas = null;

    public function __construct() {
        $this->conditions = new DeploymentConditionSet();
    }
}
