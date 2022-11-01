<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\APIService;

/**
 * Container for a set of APIService objects
 *
 * @package \Moonspot\Kubernetes
 */
class APIServiceSet extends TypedArray {
    public const REQUIRED_TYPE = APIService::class;
}
