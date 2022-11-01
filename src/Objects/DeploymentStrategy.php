<?php

namespace Moonspot\Kubernetes\Objects;

class DeploymentStrategy extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Rolling update config params. Present only if DeploymentStrategyType =
     * RollingUpdate.
     */
    public ?RollingUpdateDeployment $rollingUpdate = null;

    /**
     * Type of deployment. Can be "Recreate" or "RollingUpdate". Default is
     * RollingUpdate.
     * 
     * Possible enum values:
     *  - `"Recreate"` Kill all existing pods before creating new ones.
     *  - `"RollingUpdate"` Replace the old ReplicaSets by new one using
     * rolling update i.e gradually scale down the old ReplicaSets and scale up
     * the new one.
     */
    public ?string $type = null;

    public function __construct() {
        $this->rollingUpdate = new RollingUpdateDeployment();
    }
}
