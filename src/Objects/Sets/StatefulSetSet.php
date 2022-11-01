<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\StatefulSet;

/**
 * Container for a set of StatefulSet objects
 *
 * @package \Moonspot\Kubernetes
 */
class StatefulSetSet extends TypedArray {
    public const REQUIRED_TYPE = StatefulSet::class;
}
