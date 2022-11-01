<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PersistentVolumeClaim;

/**
 * Container for a set of PersistentVolumeClaim objects
 *
 * @package \Moonspot\Kubernetes
 */
class PersistentVolumeClaimSet extends TypedArray {
    public const REQUIRED_TYPE = PersistentVolumeClaim::class;
}
