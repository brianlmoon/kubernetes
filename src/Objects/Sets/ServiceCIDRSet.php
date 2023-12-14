<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ServiceCIDR;

/**
 * Container for a set of ServiceCIDR objects
 *
 * @package \Moonspot\Kubernetes
 */
class ServiceCIDRSet extends TypedArray {
    public const REQUIRED_TYPE = ServiceCIDR::class;
}
