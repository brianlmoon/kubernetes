<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ClusterTrustBundle;

/**
 * Container for a set of ClusterTrustBundle objects
 *
 * @package \Moonspot\Kubernetes
 */
class ClusterTrustBundleSet extends TypedArray {
    public const REQUIRED_TYPE = ClusterTrustBundle::class;
}
