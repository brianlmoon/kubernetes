<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\NamedRuleWithOperations;

/**
 * Container for a set of NamedRuleWithOperations objects
 *
 * @package \Moonspot\Kubernetes
 */
class NamedRuleWithOperationsSet extends TypedArray {
    public const REQUIRED_TYPE = NamedRuleWithOperations::class;
}
