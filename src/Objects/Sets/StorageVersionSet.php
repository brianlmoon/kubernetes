<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\StorageVersion;

/**
 * Container for a set of StorageVersion objects
 *
 * @package \Moonspot\Kubernetes
 */
class StorageVersionSet extends TypedArray {
    public const REQUIRED_TYPE = StorageVersion::class;
}
