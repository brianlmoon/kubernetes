<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\WeightedPodAffinityTerm;

/**
 * Container for a set of WeightedPodAffinityTerm objects
 *
 * @package \Moonspot\Kubernetes
 */
class WeightedPodAffinityTermSet extends TypedArray {
    public const REQUIRED_TYPE = WeightedPodAffinityTerm::class;
}
