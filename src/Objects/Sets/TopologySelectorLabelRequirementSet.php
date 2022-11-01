<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\TopologySelectorLabelRequirement;

/**
 * Container for a set of TopologySelectorLabelRequirement objects
 *
 * @package \Moonspot\Kubernetes
 */
class TopologySelectorLabelRequirementSet extends TypedArray {
    public const REQUIRED_TYPE = TopologySelectorLabelRequirement::class;
}
