<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodIP;

/**
 * Container for a set of PodIP objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodIPSet extends TypedArray {
    public const REQUIRED_TYPE = PodIP::class;
}
