<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
/**
 * Container for a set of int objects
 *
 * @package \Moonspot\Kubernetes
 */
class IntSet extends TypedArray {
    public const REQUIRED_TYPE = 'int';
}
