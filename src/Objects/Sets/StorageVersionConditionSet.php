<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\StorageVersionCondition;

/**
 * Container for a set of StorageVersionCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class StorageVersionConditionSet extends TypedArray {
    public const REQUIRED_TYPE = StorageVersionCondition::class;
}
