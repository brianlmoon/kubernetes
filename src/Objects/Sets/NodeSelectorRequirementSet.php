<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\NodeSelectorRequirement;

/**
 * Container for a set of NodeSelectorRequirement objects
 *
 * @package \Moonspot\Kubernetes
 */
class NodeSelectorRequirementSet extends TypedArray {
    public const REQUIRED_TYPE = NodeSelectorRequirement::class;
}
