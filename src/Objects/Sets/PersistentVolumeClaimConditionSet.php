<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PersistentVolumeClaimCondition;

/**
 * Container for a set of PersistentVolumeClaimCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class PersistentVolumeClaimConditionSet extends TypedArray {
    public const REQUIRED_TYPE = PersistentVolumeClaimCondition::class;
}
