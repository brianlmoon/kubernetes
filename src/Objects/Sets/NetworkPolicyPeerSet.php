<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\NetworkPolicyPeer;

/**
 * Container for a set of NetworkPolicyPeer objects
 *
 * @package \Moonspot\Kubernetes
 */
class NetworkPolicyPeerSet extends TypedArray {
    public const REQUIRED_TYPE = NetworkPolicyPeer::class;
}
