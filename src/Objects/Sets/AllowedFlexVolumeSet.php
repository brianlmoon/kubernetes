<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\AllowedFlexVolume;

/**
 * Container for a set of AllowedFlexVolume objects
 *
 * @package \Moonspot\Kubernetes
 */
class AllowedFlexVolumeSet extends TypedArray {
    public const REQUIRED_TYPE = AllowedFlexVolume::class;
}
