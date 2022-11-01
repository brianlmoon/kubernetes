<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ServerAddressByClientCIDR;

/**
 * Container for a set of ServerAddressByClientCIDR objects
 *
 * @package \Moonspot\Kubernetes
 */
class ServerAddressByClientCIDRSet extends TypedArray {
    public const REQUIRED_TYPE = ServerAddressByClientCIDR::class;
}
