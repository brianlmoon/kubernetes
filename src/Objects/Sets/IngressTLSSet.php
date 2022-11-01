<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\IngressTLS;

/**
 * Container for a set of IngressTLS objects
 *
 * @package \Moonspot\Kubernetes
 */
class IngressTLSSet extends TypedArray {
    public const REQUIRED_TYPE = IngressTLS::class;
}
