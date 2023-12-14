<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ResourceClaimConsumerReference;

/**
 * Container for a set of ResourceClaimConsumerReference objects
 *
 * @package \Moonspot\Kubernetes
 */
class ResourceClaimConsumerReferenceSet extends TypedArray {
    public const REQUIRED_TYPE = ResourceClaimConsumerReference::class;
}
