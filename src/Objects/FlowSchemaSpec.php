<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\PolicyRulesWithSubjectsSet;

class FlowSchemaSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * `distinguisherMethod` defines how to compute the flow distinguisher for
     * requests that match this schema. `nil` specifies that the distinguisher
     * is disabled and thus will always be the empty string.
     */
    public ?FlowDistinguisherMethod $distinguisherMethod = null;

    /**
     * `matchingPrecedence` is used to choose among the FlowSchemas that match
     * a given request. The chosen FlowSchema is among those with the
     * numerically lowest (which we take to be logically highest)
     * MatchingPrecedence.  Each MatchingPrecedence value must be ranged in
     * [1,10000]. Note that if the precedence is not specified, it will be set
     * to 1000 as default.
     */
    public ?int $matchingPrecedence = null;

    /**
     * `priorityLevelConfiguration` should reference a
     * PriorityLevelConfiguration in the cluster. If the reference cannot be
     * resolved, the FlowSchema will be ignored and marked as invalid in its
     * status. Required.
     */
    public PriorityLevelConfigurationReference $priorityLevelConfiguration;

    /**
     * `rules` describes which requests will match this flow schema. This
     * FlowSchema matches a request if and only if at least one member of rules
     * matches the request. if it is an empty slice, there will be no requests
     * matching the FlowSchema.
     */
    public ?PolicyRulesWithSubjectsSet $rules = null;

    public function __construct() {
        $this->distinguisherMethod = new FlowDistinguisherMethod();
        $this->priorityLevelConfiguration = new PriorityLevelConfigurationReference();
        $this->rules = new PolicyRulesWithSubjectsSet();
    }
}
