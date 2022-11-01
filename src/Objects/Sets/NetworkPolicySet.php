<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\NetworkPolicy;

/**
 * Container for a set of NetworkPolicy objects
 *
 * @package \Moonspot\Kubernetes
 */
class NetworkPolicySet extends TypedArray {
    public const REQUIRED_TYPE = NetworkPolicy::class;
}
