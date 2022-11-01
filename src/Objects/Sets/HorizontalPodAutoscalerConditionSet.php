<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\HorizontalPodAutoscalerCondition;

/**
 * Container for a set of HorizontalPodAutoscalerCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class HorizontalPodAutoscalerConditionSet extends TypedArray {
    public const REQUIRED_TYPE = HorizontalPodAutoscalerCondition::class;
}
