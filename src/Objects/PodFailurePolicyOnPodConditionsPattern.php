<?php

namespace Moonspot\Kubernetes\Objects;

class PodFailurePolicyOnPodConditionsPattern extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Specifies the required Pod condition status. To match a pod condition it
     * is required that the specified status equals the pod condition status.
     * Defaults to True.
     */
    public string $status;

    /**
     * Specifies the required Pod condition type. To match a pod condition it
     * is required that specified type equals the pod condition type.
     */
    public string $type;
}
