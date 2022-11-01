<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\IDRange;

/**
 * Container for a set of IDRange objects
 *
 * @package \Moonspot\Kubernetes
 */
class IDRangeSet extends TypedArray {
    public const REQUIRED_TYPE = IDRange::class;
}
