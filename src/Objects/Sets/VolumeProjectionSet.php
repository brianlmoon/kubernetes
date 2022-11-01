<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\VolumeProjection;

/**
 * Container for a set of VolumeProjection objects
 *
 * @package \Moonspot\Kubernetes
 */
class VolumeProjectionSet extends TypedArray {
    public const REQUIRED_TYPE = VolumeProjection::class;
}
