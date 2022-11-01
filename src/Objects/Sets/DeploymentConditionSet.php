<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\DeploymentCondition;

/**
 * Container for a set of DeploymentCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class DeploymentConditionSet extends TypedArray {
    public const REQUIRED_TYPE = DeploymentCondition::class;
}
