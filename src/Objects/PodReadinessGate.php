<?php

namespace Moonspot\Kubernetes\Objects;

class PodReadinessGate extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ConditionType refers to a condition in the pod's condition list with
     * matching type.
     */
    public string $conditionType;
}
