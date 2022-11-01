<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\StorageClass;

/**
 * Container for a set of StorageClass objects
 *
 * @package \Moonspot\Kubernetes
 */
class StorageClassSet extends TypedArray {
    public const REQUIRED_TYPE = StorageClass::class;
}
