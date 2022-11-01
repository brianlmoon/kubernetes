<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\DaemonSetCondition;

/**
 * Container for a set of DaemonSetCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class DaemonSetConditionSet extends TypedArray {
    public const REQUIRED_TYPE = DaemonSetCondition::class;
}
