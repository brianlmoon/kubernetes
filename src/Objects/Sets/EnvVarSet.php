<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\EnvVar;

/**
 * Container for a set of EnvVar objects
 *
 * @package \Moonspot\Kubernetes
 */
class EnvVarSet extends TypedArray {
    public const REQUIRED_TYPE = EnvVar::class;
}
