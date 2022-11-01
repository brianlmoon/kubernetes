<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\StatusCause;

/**
 * Container for a set of StatusCause objects
 *
 * @package \Moonspot\Kubernetes
 */
class StatusCauseSet extends TypedArray {
    public const REQUIRED_TYPE = StatusCause::class;
}
