<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\HPAScalingPolicy;

/**
 * Container for a set of HPAScalingPolicy objects
 *
 * @package \Moonspot\Kubernetes
 */
class HPAScalingPolicySet extends TypedArray {
    public const REQUIRED_TYPE = HPAScalingPolicy::class;
}
