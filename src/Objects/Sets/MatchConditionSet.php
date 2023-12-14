<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\MatchCondition;

/**
 * Container for a set of MatchCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class MatchConditionSet extends TypedArray {
    public const REQUIRED_TYPE = MatchCondition::class;
}
