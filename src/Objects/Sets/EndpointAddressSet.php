<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\EndpointAddress;

/**
 * Container for a set of EndpointAddress objects
 *
 * @package \Moonspot\Kubernetes
 */
class EndpointAddressSet extends TypedArray {
    public const REQUIRED_TYPE = EndpointAddress::class;
}
