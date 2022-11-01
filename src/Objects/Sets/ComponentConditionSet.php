<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ComponentCondition;

/**
 * Container for a set of ComponentCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class ComponentConditionSet extends TypedArray {
    public const REQUIRED_TYPE = ComponentCondition::class;
}
