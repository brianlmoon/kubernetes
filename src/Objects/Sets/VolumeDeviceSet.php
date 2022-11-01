<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\VolumeDevice;

/**
 * Container for a set of VolumeDevice objects
 *
 * @package \Moonspot\Kubernetes
 */
class VolumeDeviceSet extends TypedArray {
    public const REQUIRED_TYPE = VolumeDevice::class;
}
