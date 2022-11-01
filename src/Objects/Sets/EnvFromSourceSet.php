<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\EnvFromSource;

/**
 * Container for a set of EnvFromSource objects
 *
 * @package \Moonspot\Kubernetes
 */
class EnvFromSourceSet extends TypedArray {
    public const REQUIRED_TYPE = EnvFromSource::class;
}
