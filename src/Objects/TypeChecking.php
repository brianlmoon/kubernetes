<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\ExpressionWarningSet;

class TypeChecking extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The type checking warnings for each expression.
     */
    public ?ExpressionWarningSet $expressionWarnings = null;

    public function __construct() {
        $this->expressionWarnings = new ExpressionWarningSet();
    }
}
