<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ConfigMap;

/**
 * Container for a set of ConfigMap objects
 *
 * @package \Moonspot\Kubernetes
 */
class ConfigMapSet extends TypedArray {
    public const REQUIRED_TYPE = ConfigMap::class;
}
