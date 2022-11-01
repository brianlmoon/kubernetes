<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PortStatus;

/**
 * Container for a set of PortStatus objects
 *
 * @package \Moonspot\Kubernetes
 */
class PortStatusSet extends TypedArray {
    public const REQUIRED_TYPE = PortStatus::class;
}
