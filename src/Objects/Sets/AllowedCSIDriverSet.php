<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\AllowedCSIDriver;

/**
 * Container for a set of AllowedCSIDriver objects
 *
 * @package \Moonspot\Kubernetes
 */
class AllowedCSIDriverSet extends TypedArray {
    public const REQUIRED_TYPE = AllowedCSIDriver::class;
}
