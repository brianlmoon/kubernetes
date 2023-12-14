<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\IngressLoadBalancerIngress;

/**
 * Container for a set of IngressLoadBalancerIngress objects
 *
 * @package \Moonspot\Kubernetes
 */
class IngressLoadBalancerIngressSet extends TypedArray {
    public const REQUIRED_TYPE = IngressLoadBalancerIngress::class;
}
