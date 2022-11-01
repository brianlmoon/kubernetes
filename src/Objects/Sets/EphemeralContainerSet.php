<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\EphemeralContainer;

/**
 * Container for a set of EphemeralContainer objects
 *
 * @package \Moonspot\Kubernetes
 */
class EphemeralContainerSet extends TypedArray {
    public const REQUIRED_TYPE = EphemeralContainer::class;
}
