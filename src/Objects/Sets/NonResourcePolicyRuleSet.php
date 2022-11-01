<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\NonResourcePolicyRule;

/**
 * Container for a set of NonResourcePolicyRule objects
 *
 * @package \Moonspot\Kubernetes
 */
class NonResourcePolicyRuleSet extends TypedArray {
    public const REQUIRED_TYPE = NonResourcePolicyRule::class;
}
