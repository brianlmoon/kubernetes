<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Service;

/**
 * Container for a set of Service objects
 *
 * @package \Moonspot\Kubernetes
 */
class ServiceSet extends TypedArray {
    public const REQUIRED_TYPE = Service::class;
}
