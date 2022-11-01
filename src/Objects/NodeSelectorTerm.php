<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\NodeSelectorRequirementSet;

class NodeSelectorTerm extends \Moonspot\Kubernetes\BaseObject {

    /**
     * A list of node selector requirements by node's labels.
     */
    public ?NodeSelectorRequirementSet $matchExpressions = null;

    /**
     * A list of node selector requirements by node's fields.
     */
    public ?NodeSelectorRequirementSet $matchFields = null;

    public function __construct() {
        $this->matchExpressions = new NodeSelectorRequirementSet();
        $this->matchFields = new NodeSelectorRequirementSet();
    }
}
