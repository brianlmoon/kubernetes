<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodResourceClaim;

/**
 * Container for a set of PodResourceClaim objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodResourceClaimSet extends TypedArray {
    public const REQUIRED_TYPE = PodResourceClaim::class;
}
