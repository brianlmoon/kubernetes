<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ResourceHandle;

/**
 * Container for a set of ResourceHandle objects
 *
 * @package \Moonspot\Kubernetes
 */
class ResourceHandleSet extends TypedArray {
    public const REQUIRED_TYPE = ResourceHandle::class;
}
