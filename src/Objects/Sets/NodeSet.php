<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Node;

/**
 * Container for a set of Node objects
 *
 * @package \Moonspot\Kubernetes
 */
class NodeSet extends TypedArray {
    public const REQUIRED_TYPE = Node::class;
}
