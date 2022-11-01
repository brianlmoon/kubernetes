<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\HTTPHeader;

/**
 * Container for a set of HTTPHeader objects
 *
 * @package \Moonspot\Kubernetes
 */
class HTTPHeaderSet extends TypedArray {
    public const REQUIRED_TYPE = HTTPHeader::class;
}
