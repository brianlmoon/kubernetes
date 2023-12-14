<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\HostIP;

/**
 * Container for a set of HostIP objects
 *
 * @package \Moonspot\Kubernetes
 */
class HostIPSet extends TypedArray {
    public const REQUIRED_TYPE = HostIP::class;
}
