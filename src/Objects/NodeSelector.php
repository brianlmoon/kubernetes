<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\NodeSelectorTermSet;

class NodeSelector extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Required. A list of node selector terms. The terms are ORed.
     */
    public NodeSelectorTermSet $nodeSelectorTerms;

    public function __construct() {
        $this->nodeSelectorTerms = new NodeSelectorTermSet();
    }
}
