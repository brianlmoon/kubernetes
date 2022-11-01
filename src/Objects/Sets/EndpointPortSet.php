<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\EndpointPort;

/**
 * Container for a set of EndpointPort objects
 *
 * @package \Moonspot\Kubernetes
 */
class EndpointPortSet extends TypedArray {
    public const REQUIRED_TYPE = EndpointPort::class;
}
