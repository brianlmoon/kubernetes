<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\OwnerReference;

/**
 * Container for a set of OwnerReference objects
 *
 * @package \Moonspot\Kubernetes
 */
class OwnerReferenceSet extends TypedArray {
    public const REQUIRED_TYPE = OwnerReference::class;
}
