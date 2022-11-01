<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\CSIDriver;

/**
 * Container for a set of CSIDriver objects
 *
 * @package \Moonspot\Kubernetes
 */
class CSIDriverSet extends TypedArray {
    public const REQUIRED_TYPE = CSIDriver::class;
}
