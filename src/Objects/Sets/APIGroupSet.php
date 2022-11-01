<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\APIGroup;

/**
 * Container for a set of APIGroup objects
 *
 * @package \Moonspot\Kubernetes
 */
class APIGroupSet extends TypedArray {
    public const REQUIRED_TYPE = APIGroup::class;
}
