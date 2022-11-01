<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ClusterRoleBinding;

/**
 * Container for a set of ClusterRoleBinding objects
 *
 * @package \Moonspot\Kubernetes
 */
class ClusterRoleBindingSet extends TypedArray {
    public const REQUIRED_TYPE = ClusterRoleBinding::class;
}
