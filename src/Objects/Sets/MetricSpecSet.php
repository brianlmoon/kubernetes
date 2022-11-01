<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\MetricSpec;

/**
 * Container for a set of MetricSpec objects
 *
 * @package \Moonspot\Kubernetes
 */
class MetricSpecSet extends TypedArray {
    public const REQUIRED_TYPE = MetricSpec::class;
}
