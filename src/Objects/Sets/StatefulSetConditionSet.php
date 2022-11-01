<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\StatefulSetCondition;

/**
 * Container for a set of StatefulSetCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class StatefulSetConditionSet extends TypedArray {
    public const REQUIRED_TYPE = StatefulSetCondition::class;
}
