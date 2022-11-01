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
     */
    public ?string $type = null;

    public function __construct() {
        $this->rollingUpdate = new RollingUpdateDeployment();
    }
}
