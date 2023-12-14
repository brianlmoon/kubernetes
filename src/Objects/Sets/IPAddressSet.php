<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\IPAddress;

/**
 * Container for a set of IPAddress objects
 *
 * @package \Moonspot\Kubernetes
 */
class IPAddressSet extends TypedArray {
    public const REQUIRED_TYPE = IPAddress::class;
}
