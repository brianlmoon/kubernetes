<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ReplicaSetCondition;

/**
 * Container for a set of ReplicaSetCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class ReplicaSetConditionSet extends TypedArray {
    public const REQUIRED_TYPE = ReplicaSetCondition::class;
}
