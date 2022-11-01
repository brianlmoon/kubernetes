<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ValidationRule;

/**
 * Container for a set of ValidationRule objects
 *
 * @package \Moonspot\Kubernetes
 */
class ValidationRuleSet extends TypedArray {
    public const REQUIRED_TYPE = ValidationRule::class;
}
