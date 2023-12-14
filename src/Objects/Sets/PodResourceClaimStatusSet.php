<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodResourceClaimStatus;

/**
 * Container for a set of PodResourceClaimStatus objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodResourceClaimStatusSet extends TypedArray {
    public const REQUIRED_TYPE = PodResourceClaimStatus::class;
}
