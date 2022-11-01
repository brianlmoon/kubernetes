<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ResourceRule;

/**
 * Container for a set of ResourceRule objects
 *
 * @package \Moonspot\Kubernetes
 */
class ResourceRuleSet extends TypedArray {
    public const REQUIRED_TYPE = ResourceRule::class;
}
