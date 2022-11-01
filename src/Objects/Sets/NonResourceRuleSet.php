<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\NonResourceRule;

/**
 * Container for a set of NonResourceRule objects
 *
 * @package \Moonspot\Kubernetes
 */
class NonResourceRuleSet extends TypedArray {
    public const REQUIRED_TYPE = NonResourceRule::class;
}
