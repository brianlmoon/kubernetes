<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\LabelSelector;

/**
 * Container for a set of LabelSelector objects
 *
 * @package \Moonspot\Kubernetes
 */
class LabelSelectorSet extends TypedArray {
    public const REQUIRED_TYPE = LabelSelector::class;
}
