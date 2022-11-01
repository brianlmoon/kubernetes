<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\VolumeMount;

/**
 * Container for a set of VolumeMount objects
 *
 * @package \Moonspot\Kubernetes
 */
class VolumeMountSet extends TypedArray {
    public const REQUIRED_TYPE = VolumeMount::class;
}
