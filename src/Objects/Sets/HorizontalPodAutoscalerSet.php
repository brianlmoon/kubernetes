<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\HorizontalPodAutoscaler;

/**
 * Container for a set of HorizontalPodAutoscaler objects
 *
 * @package \Moonspot\Kubernetes
 */
class HorizontalPodAutoscalerSet extends TypedArray {
    public const REQUIRED_TYPE = HorizontalPodAutoscaler::class;
}
