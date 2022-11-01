<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Role;

/**
 * Container for a set of Role objects
 *
 * @package \Moonspot\Kubernetes
 */
class RoleSet extends TypedArray {
    public const REQUIRED_TYPE = Role::class;
}
