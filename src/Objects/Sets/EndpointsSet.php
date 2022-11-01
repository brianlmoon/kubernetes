<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Endpoints;

/**
 * Container for a set of Endpoints objects
 *
 * @package \Moonspot\Kubernetes
 */
class EndpointsSet extends TypedArray {
    public const REQUIRED_TYPE = Endpoints::class;
}
