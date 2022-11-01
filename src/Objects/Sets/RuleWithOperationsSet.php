<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\RuleWithOperations;

/**
 * Container for a set of RuleWithOperations objects
 *
 * @package \Moonspot\Kubernetes
 */
class RuleWithOperationsSet extends TypedArray {
    public const REQUIRED_TYPE = RuleWithOperations::class;
}
