<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Lease;

/**
 * Container for a set of Lease objects
 *
 * @package \Moonspot\Kubernetes
 */
class LeaseSet extends TypedArray {
    public const REQUIRED_TYPE = Lease::class;
}
