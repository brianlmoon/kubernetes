<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ContainerResizePolicy;

/**
 * Container for a set of ContainerResizePolicy objects
 *
 * @package \Moonspot\Kubernetes
 */
class ContainerResizePolicySet extends TypedArray {
    public const REQUIRED_TYPE = ContainerResizePolicy::class;
}
