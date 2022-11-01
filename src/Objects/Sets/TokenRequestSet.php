<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\TokenRequest;

/**
 * Container for a set of TokenRequest objects
 *
 * @package \Moonspot\Kubernetes
 */
class TokenRequestSet extends TypedArray {
    public const REQUIRED_TYPE = TokenRequest::class;
}
