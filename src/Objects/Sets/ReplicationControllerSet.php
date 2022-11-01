<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ReplicationController;

/**
 * Container for a set of ReplicationController objects
 *
 * @package \Moonspot\Kubernetes
 */
class ReplicationControllerSet extends TypedArray {
    public const REQUIRED_TYPE = ReplicationController::class;
}
