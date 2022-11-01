<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ServerStorageVersion;

/**
 * Container for a set of ServerStorageVersion objects
 *
 * @package \Moonspot\Kubernetes
 */
class ServerStorageVersionSet extends TypedArray {
    public const REQUIRED_TYPE = ServerStorageVersion::class;
}
