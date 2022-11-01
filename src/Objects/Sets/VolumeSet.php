<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Volume;

/**
 * Container for a set of Volume objects
 *
 * @package \Moonspot\Kubernetes
 */
class VolumeSet extends TypedArray {
    public const REQUIRED_TYPE = Volume::class;
}
