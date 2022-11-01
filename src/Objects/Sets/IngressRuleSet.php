<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\IngressRule;

/**
 * Container for a set of IngressRule objects
 *
 * @package \Moonspot\Kubernetes
 */
class IngressRuleSet extends TypedArray {
    public const REQUIRED_TYPE = IngressRule::class;
}
