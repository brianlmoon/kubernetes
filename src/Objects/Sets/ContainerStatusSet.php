<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ContainerStatus;

/**
 * Container for a set of ContainerStatus objects
 *
 * @package \Moonspot\Kubernetes
 */
class ContainerStatusSet extends TypedArray {
    public const REQUIRED_TYPE = ContainerStatus::class;
}
