<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Deployment;

/**
 * Container for a set of Deployment objects
 *
 * @package \Moonspot\Kubernetes
 */
class DeploymentSet extends TypedArray {
    public const REQUIRED_TYPE = Deployment::class;
}
