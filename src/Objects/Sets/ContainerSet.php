<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Container;

/**
 * Container for a set of Container objects
 *
 * @package \Moonspot\Kubernetes
 */
class ContainerSet extends TypedArray {
    public const REQUIRED_TYPE = Container::class;
}
