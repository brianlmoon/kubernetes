<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\JSON;

/**
 * Container for a set of JSON objects
 *
 * @package \Moonspot\Kubernetes
 */
class JSONSet extends TypedArray {
    public const REQUIRED_TYPE = JSON::class;
}
