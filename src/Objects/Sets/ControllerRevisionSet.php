<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ControllerRevision;

/**
 * Container for a set of ControllerRevision objects
 *
 * @package \Moonspot\Kubernetes
 */
class ControllerRevisionSet extends TypedArray {
    public const REQUIRED_TYPE = ControllerRevision::class;
}
