<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\VolumeAttachment;

/**
 * Container for a set of VolumeAttachment objects
 *
 * @package \Moonspot\Kubernetes
 */
class VolumeAttachmentSet extends TypedArray {
    public const REQUIRED_TYPE = VolumeAttachment::class;
}
