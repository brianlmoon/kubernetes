<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Endpoint;

/**
 * Container for a set of Endpoint objects
 *
 * @package \Moonspot\Kubernetes
 */
class EndpointSet extends TypedArray {
    public const REQUIRED_TYPE = Endpoint::class;
}
