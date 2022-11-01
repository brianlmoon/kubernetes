<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\CSINode;

/**
 * Container for a set of CSINode objects
 *
 * @package \Moonspot\Kubernetes
 */
class CSINodeSet extends TypedArray {
    public const REQUIRED_TYPE = CSINode::class;
}
