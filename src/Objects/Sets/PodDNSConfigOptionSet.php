<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodDNSConfigOption;

/**
 * Container for a set of PodDNSConfigOption objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodDNSConfigOptionSet extends TypedArray {
    public const REQUIRED_TYPE = PodDNSConfigOption::class;
}
