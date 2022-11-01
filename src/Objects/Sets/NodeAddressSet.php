<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\NodeAddress;

/**
 * Container for a set of NodeAddress objects
 *
 * @package \Moonspot\Kubernetes
 */
class NodeAddressSet extends TypedArray {
    public const REQUIRED_TYPE = NodeAddress::class;
}
