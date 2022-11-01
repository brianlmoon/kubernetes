<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\KeyToPath;

/**
 * Container for a set of KeyToPath objects
 *
 * @package \Moonspot\Kubernetes
 */
class KeyToPathSet extends TypedArray {
    public const REQUIRED_TYPE = KeyToPath::class;
}
