<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodReadinessGate;

/**
 * Container for a set of PodReadinessGate objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodReadinessGateSet extends TypedArray {
    public const REQUIRED_TYPE = PodReadinessGate::class;
}
