<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Variable;

/**
 * Container for a set of Variable objects
 *
 * @package \Moonspot\Kubernetes
 */
class VariableSet extends TypedArray {
    public const REQUIRED_TYPE = Variable::class;
}
