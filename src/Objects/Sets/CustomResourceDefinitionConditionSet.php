<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\CustomResourceDefinitionCondition;

/**
 * Container for a set of CustomResourceDefinitionCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class CustomResourceDefinitionConditionSet extends TypedArray {
    public const REQUIRED_TYPE = CustomResourceDefinitionCondition::class;
}
