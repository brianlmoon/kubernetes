<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Ingress;

/**
 * Container for a set of Ingress objects
 *
 * @package \Moonspot\Kubernetes
 */
class IngressSet extends TypedArray {
    public const REQUIRED_TYPE = Ingress::class;
}
