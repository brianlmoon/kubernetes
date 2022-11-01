<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\AllowedHostPath;

/**
 * Container for a set of AllowedHostPath objects
 *
 * @package \Moonspot\Kubernetes
 */
class AllowedHostPathSet extends TypedArray {
    public const REQUIRED_TYPE = AllowedHostPath::class;
}
