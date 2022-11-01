<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\AttachedVolume;

/**
 * Container for a set of AttachedVolume objects
 *
 * @package \Moonspot\Kubernetes
 */
class AttachedVolumeSet extends TypedArray {
    public const REQUIRED_TYPE = AttachedVolume::class;
}
