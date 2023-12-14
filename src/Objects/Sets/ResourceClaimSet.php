<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ResourceClaim;

/**
 * Container for a set of ResourceClaim objects
 *
 * @package \Moonspot\Kubernetes
 */
class ResourceClaimSet extends TypedArray {
    public const REQUIRED_TYPE = ResourceClaim::class;
}
