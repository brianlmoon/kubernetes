<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodDisruptionBudget;

/**
 * Container for a set of PodDisruptionBudget objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodDisruptionBudgetSet extends TypedArray {
    public const REQUIRED_TYPE = PodDisruptionBudget::class;
}
