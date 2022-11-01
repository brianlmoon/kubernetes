<?php

namespace Moonspot\Kubernetes\Objects;

class PreferredSchedulingTerm extends \Moonspot\Kubernetes\BaseObject {

    /**
     * A node selector term, associated with the corresponding weight.
     */
    public NodeSelectorTerm $preference;

    /**
     * Weight associated with matching the corresponding nodeSelectorTerm, in
     * the range 1-100.
     */
    public int $weight;

    public function __construct() {
        $this->preference = new NodeSelectorTerm();
    }
}
