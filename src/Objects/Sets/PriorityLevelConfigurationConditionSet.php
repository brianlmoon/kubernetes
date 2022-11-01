<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PriorityLevelConfigurationCondition;

/**
 * Container for a set of PriorityLevelConfigurationCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class PriorityLevelConfigurationConditionSet extends TypedArray {
    public const REQUIRED_TYPE = PriorityLevelConfigurationCondition::class;
}
