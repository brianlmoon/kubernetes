<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\NetworkPolicyIngressRule;

/**
 * Container for a set of NetworkPolicyIngressRule objects
 *
 * @package \Moonspot\Kubernetes
 */
class NetworkPolicyIngressRuleSet extends TypedArray {
    public const REQUIRED_TYPE = NetworkPolicyIngressRule::class;
}
