<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\ConditionSet;

class ValidatingAdmissionPolicyStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The conditions represent the latest available observations of a policy's
     * current state.
     */
    public ?ConditionSet $conditions = null;

    /**
     * The generation observed by the controller.
     */
    public ?int $observedGeneration = null;

    /**
     * The results of type checking for each expression. Presence of this field
     * indicates the completion of the type checking.
     */
    public ?TypeChecking $typeChecking = null;

    public function __construct() {
        $this->conditions = new ConditionSet();
        $this->typeChecking = new TypeChecking();
    }
}
