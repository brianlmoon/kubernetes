<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Toleration;

/**
 * Container for a set of Toleration objects
 *
 * @package \Moonspot\Kubernetes
 */
class TolerationSet extends TypedArray {
    public const REQUIRED_TYPE = Toleration::class;
}
