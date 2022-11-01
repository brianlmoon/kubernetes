<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\CSIStorageCapacity;

/**
 * Container for a set of CSIStorageCapacity objects
 *
 * @package \Moonspot\Kubernetes
 */
class CSIStorageCapacitySet extends TypedArray {
    public const REQUIRED_TYPE = CSIStorageCapacity::class;
}
