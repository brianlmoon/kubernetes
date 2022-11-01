<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\NetworkPolicyPort;

/**
 * Container for a set of NetworkPolicyPort objects
 *
 * @package \Moonspot\Kubernetes
 */
class NetworkPolicyPortSet extends TypedArray {
    public const REQUIRED_TYPE = NetworkPolicyPort::class;
}
