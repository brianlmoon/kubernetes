<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\APIServiceConditionSet;

class APIServiceStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Current service state of apiService.
     */
    public ?APIServiceConditionSet $conditions = null;

    public function __construct() {
        $this->conditions = new APIServiceConditionSet();
    }
}
