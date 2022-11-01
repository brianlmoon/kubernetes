<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ObjectReference;

/**
 * Container for a set of ObjectReference objects
 *
 * @package \Moonspot\Kubernetes
 */
class ObjectReferenceSet extends TypedArray {
    public const REQUIRED_TYPE = ObjectReference::class;
}
