<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\ConditionSet;

class NetworkPolicyStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * conditions holds an array of metav1.Condition that describe the state of
     * the NetworkPolicy. Current service state
     */
    public ?ConditionSet $conditions = null;

    public function __construct() {
        $this->conditions = new ConditionSet();
    }
}
