<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ReplicaSet;

/**
 * Container for a set of ReplicaSet objects
 *
 * @package \Moonspot\Kubernetes
 */
class ReplicaSetSet extends TypedArray {
    public const REQUIRED_TYPE = ReplicaSet::class;
}
