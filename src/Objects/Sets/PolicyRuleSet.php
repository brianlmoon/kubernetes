<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PolicyRule;

/**
 * Container for a set of PolicyRule objects
 *
 * @package \Moonspot\Kubernetes
 */
class PolicyRuleSet extends TypedArray {
    public const REQUIRED_TYPE = PolicyRule::class;
}
