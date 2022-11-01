<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\GroupVersionForDiscovery;

/**
 * Container for a set of GroupVersionForDiscovery objects
 *
 * @package \Moonspot\Kubernetes
 */
class GroupVersionForDiscoverySet extends TypedArray {
    public const REQUIRED_TYPE = GroupVersionForDiscovery::class;
}
