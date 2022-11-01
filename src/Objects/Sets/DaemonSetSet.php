<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\DaemonSet;

/**
 * Container for a set of DaemonSet objects
 *
 * @package \Moonspot\Kubernetes
 */
class DaemonSetSet extends TypedArray {
    public const REQUIRED_TYPE = DaemonSet::class;
}
