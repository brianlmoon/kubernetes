<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\RuntimeClass;

/**
 * Container for a set of RuntimeClass objects
 *
 * @package \Moonspot\Kubernetes
 */
class RuntimeClassSet extends TypedArray {
    public const REQUIRED_TYPE = RuntimeClass::class;
}
