<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PreferredSchedulingTerm;

/**
 * Container for a set of PreferredSchedulingTerm objects
 *
 * @package \Moonspot\Kubernetes
 */
class PreferredSchedulingTermSet extends TypedArray {
    public const REQUIRED_TYPE = PreferredSchedulingTerm::class;
}
