<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodSecurityPolicy;

/**
 * Container for a set of PodSecurityPolicy objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodSecurityPolicySet extends TypedArray {
    public const REQUIRED_TYPE = PodSecurityPolicy::class;
}
