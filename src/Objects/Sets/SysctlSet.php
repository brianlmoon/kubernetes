<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Sysctl;

/**
 * Container for a set of Sysctl objects
 *
 * @package \Moonspot\Kubernetes
 */
class SysctlSet extends TypedArray {
    public const REQUIRED_TYPE = Sysctl::class;
}
