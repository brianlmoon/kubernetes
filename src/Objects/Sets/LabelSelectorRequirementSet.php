<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\LabelSelectorRequirement;

/**
 * Container for a set of LabelSelectorRequirement objects
 *
 * @package \Moonspot\Kubernetes
 */
class LabelSelectorRequirementSet extends TypedArray {
    public const REQUIRED_TYPE = LabelSelectorRequirement::class;
}
