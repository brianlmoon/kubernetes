<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\ScopedResourceSelectorRequirementSet;

class ScopeSelector extends \Moonspot\Kubernetes\BaseObject {

    /**
     * A list of scope selector requirements by scope of the resources.
     */
    public ?ScopedResourceSelectorRequirementSet $matchExpressions = null;

    public function __construct() {
        $this->matchExpressions = new ScopedResourceSelectorRequirementSet();
    }
}
