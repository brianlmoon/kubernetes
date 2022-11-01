<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\EndpointSubset;

/**
 * Container for a set of EndpointSubset objects
 *
 * @package \Moonspot\Kubernetes
 */
class EndpointSubsetSet extends TypedArray {
    public const REQUIRED_TYPE = EndpointSubset::class;
}
