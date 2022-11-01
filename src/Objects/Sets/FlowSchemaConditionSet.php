<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\FlowSchemaCondition;

/**
 * Container for a set of FlowSchemaCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class FlowSchemaConditionSet extends TypedArray {
    public const REQUIRED_TYPE = FlowSchemaCondition::class;
}
