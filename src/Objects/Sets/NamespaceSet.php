<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\K8sNamespace;

/**
 * Container for a set of K8sNamespace objects
 *
 * @package \Moonspot\Kubernetes
 */
class NamespaceSet extends TypedArray {
    public const REQUIRED_TYPE = K8sNamespace::class;
}
