<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\IngressPortStatus;

/**
 * Container for a set of IngressPortStatus objects
 *
 * @package \Moonspot\Kubernetes
 */
class IngressPortStatusSet extends TypedArray {
    public const REQUIRED_TYPE = IngressPortStatus::class;
}
