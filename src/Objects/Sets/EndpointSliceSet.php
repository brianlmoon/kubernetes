<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\EndpointSlice;

/**
 * Container for a set of EndpointSlice objects
 *
 * @package \Moonspot\Kubernetes
 */
class EndpointSliceSet extends TypedArray {
    public const REQUIRED_TYPE = EndpointSlice::class;
}
