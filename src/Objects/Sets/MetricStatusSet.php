<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\MetricStatus;

/**
 * Container for a set of MetricStatus objects
 *
 * @package \Moonspot\Kubernetes
 */
class MetricStatusSet extends TypedArray {
    public const REQUIRED_TYPE = MetricStatus::class;
}
