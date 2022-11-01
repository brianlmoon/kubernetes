<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ScopedResourceSelectorRequirement;

/**
 * Container for a set of ScopedResourceSelectorRequirement objects
 *
 * @package \Moonspot\Kubernetes
 */
class ScopedResourceSelectorRequirementSet extends TypedArray {
    public const REQUIRED_TYPE = ScopedResourceSelectorRequirement::class;
}
