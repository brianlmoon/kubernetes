<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\RoleBinding;

/**
 * Container for a set of RoleBinding objects
 *
 * @package \Moonspot\Kubernetes
 */
class RoleBindingSet extends TypedArray {
    public const REQUIRED_TYPE = RoleBinding::class;
}
