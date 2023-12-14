<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Validation;

/**
 * Container for a set of Validation objects
 *
 * @package \Moonspot\Kubernetes
 */
class ValidationSet extends TypedArray {
    public const REQUIRED_TYPE = Validation::class;
}
