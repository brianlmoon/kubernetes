<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\FlowSchemaConditionSet;

class FlowSchemaStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * `conditions` is a list of the current states of FlowSchema.
     */
    public ?FlowSchemaConditionSet $conditions = null;

    public function __construct() {
        $this->conditions = new FlowSchemaConditionSet();
    }
}
