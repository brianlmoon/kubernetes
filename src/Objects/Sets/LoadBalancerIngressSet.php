<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\LoadBalancerIngress;

/**
 * Container for a set of LoadBalancerIngress objects
 *
 * @package \Moonspot\Kubernetes
 */
class LoadBalancerIngressSet extends TypedArray {
    public const REQUIRED_TYPE = LoadBalancerIngress::class;
}
