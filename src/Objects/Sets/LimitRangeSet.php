<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\LimitRange;

/**
 * Container for a set of LimitRange objects
 *
 * @package \Moonspot\Kubernetes
 */
class LimitRangeSet extends TypedArray {
    public const REQUIRED_TYPE = LimitRange::class;
}
