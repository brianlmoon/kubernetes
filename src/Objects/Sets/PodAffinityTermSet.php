<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodAffinityTerm;

/**
 * Container for a set of PodAffinityTerm objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodAffinityTermSet extends TypedArray {
    public const REQUIRED_TYPE = PodAffinityTerm::class;
}
