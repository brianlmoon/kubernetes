<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ServicePort;

/**
 * Container for a set of ServicePort objects
 *
 * @package \Moonspot\Kubernetes
 */
class ServicePortSet extends TypedArray {
    public const REQUIRED_TYPE = ServicePort::class;
}
