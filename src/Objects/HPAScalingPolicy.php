<?php

namespace Moonspot\Kubernetes\Objects;

class HPAScalingPolicy extends \Moonspot\Kubernetes\BaseObject {

    /**
     * periodSeconds specifies the window of time for which the policy should
     * hold true. PeriodSeconds must be greater than zero and less than or
     * equal to 1800 (30 min).
     */
    public int $periodSeconds;

    /**
     * type is used to specify the scaling policy.
     */
    public string $type;

    /**
     * value contains the amount of change which is permitted by the policy. It
     * must be greater than zero
     */
    public int $value;
}
