<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ClusterRole;

/**
 * Container for a set of ClusterRole objects
 *
 * @package \Moonspot\Kubernetes
 */
class ClusterRoleSet extends TypedArray {
    public const REQUIRED_TYPE = ClusterRole::class;
}
