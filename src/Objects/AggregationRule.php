<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\LabelSelectorSet;

class AggregationRule extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ClusterRoleSelectors holds a list of selectors which will be used to
     * find ClusterRoles and create the rules. If any of the selectors match,
     * then the ClusterRole's permissions will be added
     */
    public ?LabelSelectorSet $clusterRoleSelectors = null;

    public function __construct() {
        $this->clusterRoleSelectors = new LabelSelectorSet();
    }
}
