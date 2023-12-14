<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\VolumeAttributesClass;

/**
 * Container for a set of VolumeAttributesClass objects
 *
 * @package \Moonspot\Kubernetes
 */
class VolumeAttributesClassSet extends TypedArray {
    public const REQUIRED_TYPE = VolumeAttributesClass::class;
}
