<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\TopologySelectorTerm;

/**
 * Container for a set of TopologySelectorTerm objects
 *
 * @package \Moonspot\Kubernetes
 */
class TopologySelectorTermSet extends TypedArray {
    public const REQUIRED_TYPE = TopologySelectorTerm::class;
}
