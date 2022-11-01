<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodFailurePolicyRule;

/**
 * Container for a set of PodFailurePolicyRule objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodFailurePolicyRuleSet extends TypedArray {
    public const REQUIRED_TYPE = PodFailurePolicyRule::class;
}
