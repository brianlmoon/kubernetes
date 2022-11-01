<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\LocalObjectReference;

/**
 * Container for a set of LocalObjectReference objects
 *
 * @package \Moonspot\Kubernetes
 */
class LocalObjectReferenceSet extends TypedArray {
    public const REQUIRED_TYPE = LocalObjectReference::class;
}
