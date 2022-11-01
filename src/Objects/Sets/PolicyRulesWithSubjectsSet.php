<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PolicyRulesWithSubjects;

/**
 * Container for a set of PolicyRulesWithSubjects objects
 *
 * @package \Moonspot\Kubernetes
 */
class PolicyRulesWithSubjectsSet extends TypedArray {
    public const REQUIRED_TYPE = PolicyRulesWithSubjects::class;
}
