<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\LabelSelectorRequirementSet;

class LabelSelector extends \Moonspot\Kubernetes\BaseObject {

    /**
     * matchExpressions is a list of label selector requirements. The
     * requirements are ANDed.
     */
    public ?LabelSelectorRequirementSet $matchExpressions = null;

    /**
     * matchLabels is a map of {key,value} pairs. A single {key,value} in the
     * matchLabels map is equivalent to an element of matchExpressions, whose
     * key field is "key", the operator is "In", and the values array contains
     * only "value". The requirements are ANDed.
     */
    public ?array $matchLabels = null;

    public function __construct() {
        $this->matchExpressions = new LabelSelectorRequirementSet();
    }
}
