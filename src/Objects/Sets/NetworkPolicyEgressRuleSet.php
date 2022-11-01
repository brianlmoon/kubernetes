<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\NetworkPolicyEgressRule;

/**
 * Container for a set of NetworkPolicyEgressRule objects
 *
 * @package \Moonspot\Kubernetes
 */
class NetworkPolicyEgressRuleSet extends TypedArray {
    public const REQUIRED_TYPE = NetworkPolicyEgressRule::class;
}
