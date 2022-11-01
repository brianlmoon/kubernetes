<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\HTTPIngressPath;

/**
 * Container for a set of HTTPIngressPath objects
 *
 * @package \Moonspot\Kubernetes
 */
class HTTPIngressPathSet extends TypedArray {
    public const REQUIRED_TYPE = HTTPIngressPath::class;
}
