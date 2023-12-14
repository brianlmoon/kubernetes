<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodSchedulingContext;

/**
 * Container for a set of PodSchedulingContext objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodSchedulingContextSet extends TypedArray {
    public const REQUIRED_TYPE = PodSchedulingContext::class;
}
