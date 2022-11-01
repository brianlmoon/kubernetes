<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\PodFailurePolicyRuleSet;

class PodFailurePolicy extends \Moonspot\Kubernetes\BaseObject {

    /**
     * A list of pod failure policy rules. The rules are evaluated in order.
     * Once a rule matches a Pod failure, the remaining of the rules are
     * ignored. When no rule matches the Pod failure, the default handling
     * applies - the counter of pod failures is incremented and it is checked
     * against the backoffLimit. At most 20 elements are allowed.
     */
    public PodFailurePolicyRuleSet $rules;

    public function __construct() {
        $this->rules = new PodFailurePolicyRuleSet();
    }
}
