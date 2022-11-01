<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\JobCondition;

/**
 * Container for a set of JobCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class JobConditionSet extends TypedArray {
    public const REQUIRED_TYPE = JobCondition::class;
}
