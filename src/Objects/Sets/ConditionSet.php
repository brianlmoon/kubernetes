<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Condition;

/**
 * Container for a set of Condition objects
 *
 * @package \Moonspot\Kubernetes
 */
class ConditionSet extends TypedArray {
    public const REQUIRED_TYPE = Condition::class;
}
