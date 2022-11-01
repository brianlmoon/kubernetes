<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ResourceQuota;

/**
 * Container for a set of ResourceQuota objects
 *
 * @package \Moonspot\Kubernetes
 */
class ResourceQuotaSet extends TypedArray {
    public const REQUIRED_TYPE = ResourceQuota::class;
}
