<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ResourcePolicyRule;

/**
 * Container for a set of ResourcePolicyRule objects
 *
 * @package \Moonspot\Kubernetes
 */
class ResourcePolicyRuleSet extends TypedArray {
    public const REQUIRED_TYPE = ResourcePolicyRule::class;
}
