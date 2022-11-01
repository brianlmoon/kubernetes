<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ContainerImage;

/**
 * Container for a set of ContainerImage objects
 *
 * @package \Moonspot\Kubernetes
 */
class ContainerImageSet extends TypedArray {
    public const REQUIRED_TYPE = ContainerImage::class;
}
