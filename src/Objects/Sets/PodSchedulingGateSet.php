<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodSchedulingGate;

/**
 * Container for a set of PodSchedulingGate objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodSchedulingGateSet extends TypedArray {
    public const REQUIRED_TYPE = PodSchedulingGate::class;
}
