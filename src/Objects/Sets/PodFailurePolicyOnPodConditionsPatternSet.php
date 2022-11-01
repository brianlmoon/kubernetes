<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodFailurePolicyOnPodConditionsPattern;

/**
 * Container for a set of PodFailurePolicyOnPodConditionsPattern objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodFailurePolicyOnPodConditionsPatternSet extends TypedArray {
    public const REQUIRED_TYPE = PodFailurePolicyOnPodConditionsPattern::class;
}
