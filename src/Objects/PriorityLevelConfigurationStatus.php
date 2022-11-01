<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\PriorityLevelConfigurationConditionSet;

class PriorityLevelConfigurationStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * `conditions` is the current state of "request-priority".
     */
    public ?PriorityLevelConfigurationConditionSet $conditions = null;

    public function __construct() {
        $this->conditions = new PriorityLevelConfigurationConditionSet();
    }
}
