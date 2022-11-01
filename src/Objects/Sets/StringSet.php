<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
/**
 * Container for a set of string objects
 *
 * @package \Moonspot\Kubernetes
 */
class StringSet extends TypedArray {
    public const REQUIRED_TYPE = 'string';
}
