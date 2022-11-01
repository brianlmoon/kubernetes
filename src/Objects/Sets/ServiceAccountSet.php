<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ServiceAccount;

/**
 * Container for a set of ServiceAccount objects
 *
 * @package \Moonspot\Kubernetes
 */
class ServiceAccountSet extends TypedArray {
    public const REQUIRED_TYPE = ServiceAccount::class;
}
