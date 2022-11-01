<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\TopologySpreadConstraint;

/**
 * Container for a set of TopologySpreadConstraint objects
 *
 * @package \Moonspot\Kubernetes
 */
class TopologySpreadConstraintSet extends TypedArray {
    public const REQUIRED_TYPE = TopologySpreadConstraint::class;
}
