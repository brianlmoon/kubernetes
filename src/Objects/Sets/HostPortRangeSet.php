<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\HostPortRange;

/**
 * Container for a set of HostPortRange objects
 *
 * @package \Moonspot\Kubernetes
 */
class HostPortRangeSet extends TypedArray {
    public const REQUIRED_TYPE = HostPortRange::class;
}
