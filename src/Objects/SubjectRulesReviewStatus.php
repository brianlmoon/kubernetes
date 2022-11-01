<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\NonResourceRuleSet;
use Moonspot\Kubernetes\Objects\Sets\ResourceRuleSet;

class SubjectRulesReviewStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * EvaluationError can appear in combination with Rules. It indicates an
     * error occurred during rule evaluation, such as an authorizer that
     * doesn't support rule evaluation, and that ResourceRules and/or
     * NonResourceRules may be incomplete.
     */
    public ?string $evaluationError = null;

    /**
     * Incomplete is true when the rules returned by this call are incomplete.
     * This is most commonly encountered when an authorizer, such as an
     * external authorizer, doesn't support rules evaluation.
     */
    public bool $incomplete;

    /**
     * NonResourceRules is the list of actions the subject is allowed to
     * perform on non-resources. The list ordering isn't significant, may
     * contain duplicates, and possibly be incomplete.
     */
    public NonResourceRuleSet $nonResourceRules;

    /**
     * ResourceRules is the list of actions the subject is allowed to perform
     * on resources. The list ordering isn't significant, may contain
     * duplicates, and possibly be incomplete.
     */
    public ResourceRuleSet $resourceRules;

    public function __construct() {
        $this->nonResourceRules = new NonResourceRuleSet();
        $this->resourceRules = new ResourceRuleSet();
    }
}
