<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ReplicationControllerCondition;

/**
 * Container for a set of ReplicationControllerCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class ReplicationControllerConditionSet extends TypedArray {
    public const REQUIRED_TYPE = ReplicationControllerCondition::class;
}
