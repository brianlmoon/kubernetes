<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\NodeCondition;

/**
 * Container for a set of NodeCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class NodeConditionSet extends TypedArray {
    public const REQUIRED_TYPE = NodeCondition::class;
}
