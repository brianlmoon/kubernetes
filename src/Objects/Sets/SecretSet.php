<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Secret;

/**
 * Container for a set of Secret objects
 *
 * @package \Moonspot\Kubernetes
 */
class SecretSet extends TypedArray {
    public const REQUIRED_TYPE = Secret::class;
}
