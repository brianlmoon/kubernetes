<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ExpressionWarning;

/**
 * Container for a set of ExpressionWarning objects
 *
 * @package \Moonspot\Kubernetes
 */
class ExpressionWarningSet extends TypedArray {
    public const REQUIRED_TYPE = ExpressionWarning::class;
}
