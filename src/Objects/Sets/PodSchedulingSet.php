<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodScheduling;

/**
 * Container for a set of PodScheduling objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodSchedulingSet extends TypedArray {
    public const REQUIRED_TYPE = PodScheduling::class;
}
