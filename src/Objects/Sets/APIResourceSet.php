<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\APIResource;

/**
 * Container for a set of APIResource objects
 *
 * @package \Moonspot\Kubernetes
 */
class APIResourceSet extends TypedArray {
    public const REQUIRED_TYPE = APIResource::class;
}
