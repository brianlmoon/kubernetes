<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\TopologySelectorLabelRequirementSet;

class TopologySelectorTerm extends \Moonspot\Kubernetes\BaseObject {

    /**
     * A list of topology selector requirements by labels.
     */
    public ?TopologySelectorLabelRequirementSet $matchLabelExpressions = null;

    public function __construct() {
        $this->matchLabelExpressions = new TopologySelectorLabelRequirementSet();
    }
}
