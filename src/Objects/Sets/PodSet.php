<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Pod;

/**
 * Container for a set of Pod objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodSet extends TypedArray {
    public const REQUIRED_TYPE = Pod::class;
}
