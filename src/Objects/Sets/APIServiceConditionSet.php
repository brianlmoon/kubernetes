<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\APIServiceCondition;

/**
 * Container for a set of APIServiceCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class APIServiceConditionSet extends TypedArray {
    public const REQUIRED_TYPE = APIServiceCondition::class;
}
