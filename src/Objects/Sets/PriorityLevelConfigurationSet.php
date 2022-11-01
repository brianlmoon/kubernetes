<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PriorityLevelConfiguration;

/**
 * Container for a set of PriorityLevelConfiguration objects
 *
 * @package \Moonspot\Kubernetes
 */
class PriorityLevelConfigurationSet extends TypedArray {
    public const REQUIRED_TYPE = PriorityLevelConfiguration::class;
}
