<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ResourceClaimSchedulingStatus;

/**
 * Container for a set of ResourceClaimSchedulingStatus objects
 *
 * @package \Moonspot\Kubernetes
 */
class ResourceClaimSchedulingStatusSet extends TypedArray {
    public const REQUIRED_TYPE = ResourceClaimSchedulingStatus::class;
}
