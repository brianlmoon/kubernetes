<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ContainerPort;

/**
 * Container for a set of ContainerPort objects
 *
 * @package \Moonspot\Kubernetes
 */
class ContainerPortSet extends TypedArray {
    public const REQUIRED_TYPE = ContainerPort::class;
}
