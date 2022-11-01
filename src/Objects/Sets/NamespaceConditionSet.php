<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\NamespaceCondition;

/**
 * Container for a set of NamespaceCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class NamespaceConditionSet extends TypedArray {
    public const REQUIRED_TYPE = NamespaceCondition::class;
}
