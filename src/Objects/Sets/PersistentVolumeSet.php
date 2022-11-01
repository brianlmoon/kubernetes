<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PersistentVolume;

/**
 * Container for a set of PersistentVolume objects
 *
 * @package \Moonspot\Kubernetes
 */
class PersistentVolumeSet extends TypedArray {
    public const REQUIRED_TYPE = PersistentVolume::class;
}
