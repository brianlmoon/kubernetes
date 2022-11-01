<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\CSINodeDriver;

/**
 * Container for a set of CSINodeDriver objects
 *
 * @package \Moonspot\Kubernetes
 */
class CSINodeDriverSet extends TypedArray {
    public const REQUIRED_TYPE = CSINodeDriver::class;
}
