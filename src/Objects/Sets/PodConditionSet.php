<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodCondition;

/**
 * Container for a set of PodCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodConditionSet extends TypedArray {
    public const REQUIRED_TYPE = PodCondition::class;
}
