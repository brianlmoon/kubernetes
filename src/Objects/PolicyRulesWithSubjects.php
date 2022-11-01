<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\NonResourcePolicyRuleSet;
use Moonspot\Kubernetes\Objects\Sets\ResourcePolicyRuleSet;
use Moonspot\Kubernetes\Objects\Sets\SubjectSet;

class PolicyRulesWithSubjects extends \Moonspot\Kubernetes\BaseObject {

    /**
     * `nonResourceRules` is a list of NonResourcePolicyRules that identify
     * matching requests according to their verb and the target non-resource
     * URL.
     */
    public ?NonResourcePolicyRuleSet $nonResourceRules = null;

    /**
     * `resourceRules` is a slice of ResourcePolicyRules that identify matching
     * requests according to their verb and the target resource. At least one
     * of `resourceRules` and `nonResourceRules` has to be non-empty.
     */
    public ?ResourcePolicyRuleSet $resourceRules = null;

    /**
     * subjects is the list of normal user, serviceaccount, or group that this
     * rule cares about. There must be at least one member in this slice. A
     * slice that includes both the system:authenticated and
     * system:unauthenticated user groups matches every request. Required.
     */
    public SubjectSet $subjects;

    public function __construct() {
        $this->nonResourceRules = new NonResourcePolicyRuleSet();
        $this->resourceRules = new ResourcePolicyRuleSet();
        $this->subjects = new SubjectSet();
    }
}
