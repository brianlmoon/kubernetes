<?php

namespace Moonspot\Kubernetes\Objects;

class StatefulSetUpdateStrategy extends \Moonspot\Kubernetes\BaseObject {

    /**
     * RollingUpdate is used to communicate parameters when Type is
     * RollingUpdateStatefulSetStrategyType.
     */
    public ?RollingUpdateStatefulSetStrategy $rollingUpdate = null;

    /**
     * Type indicates the type of the StatefulSetUpdateStrategy. Default is
     * RollingUpdate.
     */
    public ?string $type = null;

    public function __construct() {
        $this->rollingUpdate = new RollingUpdateStatefulSetStrategy();
    }
}
