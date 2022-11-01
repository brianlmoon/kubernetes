<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\IngressClass;

/**
 * Container for a set of IngressClass objects
 *
 * @package \Moonspot\Kubernetes
 */
class IngressClassSet extends TypedArray {
    public const REQUIRED_TYPE = IngressClass::class;
}
