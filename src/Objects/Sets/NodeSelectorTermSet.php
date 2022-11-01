<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\NodeSelectorTerm;

/**
 * Container for a set of NodeSelectorTerm objects
 *
 * @package \Moonspot\Kubernetes
 */
class NodeSelectorTermSet extends TypedArray {
    public const REQUIRED_TYPE = NodeSelectorTerm::class;
}
