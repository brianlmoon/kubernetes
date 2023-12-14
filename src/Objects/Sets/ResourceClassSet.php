<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ResourceClass;

/**
 * Container for a set of ResourceClass objects
 *
 * @package \Moonspot\Kubernetes
 */
class ResourceClassSet extends TypedArray {
    public const REQUIRED_TYPE = ResourceClass::class;
}
