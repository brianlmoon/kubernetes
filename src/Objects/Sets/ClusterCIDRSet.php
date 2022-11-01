<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ClusterCIDR;

/**
 * Container for a set of ClusterCIDR objects
 *
 * @package \Moonspot\Kubernetes
 */
class ClusterCIDRSet extends TypedArray {
    public const REQUIRED_TYPE = ClusterCIDR::class;
}
