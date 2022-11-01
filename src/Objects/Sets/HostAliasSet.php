<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\HostAlias;

/**
 * Container for a set of HostAlias objects
 *
 * @package \Moonspot\Kubernetes
 */
class HostAliasSet extends TypedArray {
    public const REQUIRED_TYPE = HostAlias::class;
}
