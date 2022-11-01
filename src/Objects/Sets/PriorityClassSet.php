<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PriorityClass;

/**
 * Container for a set of PriorityClass objects
 *
 * @package \Moonspot\Kubernetes
 */
class PriorityClassSet extends TypedArray {
    public const REQUIRED_TYPE = PriorityClass::class;
}
