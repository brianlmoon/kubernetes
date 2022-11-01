<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ComponentStatus;

/**
 * Container for a set of ComponentStatus objects
 *
 * @package \Moonspot\Kubernetes
 */
class ComponentStatusSet extends TypedArray {
    public const REQUIRED_TYPE = ComponentStatus::class;
}
