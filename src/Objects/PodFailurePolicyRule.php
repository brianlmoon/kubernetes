<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\PodFailurePolicyOnPodConditionsPatternSet;

class PodFailurePolicyRule extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Specifies the action taken on a pod failure when the requirements are
     * satisfied. Possible values are:
     * 
     * - FailJob: indicates that the pod's job is marked as Failed and all
     *   running pods are terminated.
     * - FailIndex: indicates that the pod's index is marked as Failed and will
     *   not be restarted.
     *   This value is beta-level. It can be used when the
     *   `JobBackoffLimitPerIndex` feature gate is enabled (enabled by
     * default).
     * - Ignore: indicates that the counter towards the .backoffLimit is not
     *   incremented and a replacement pod is created.
     * - Count: indicates that the pod is handled in the default way - the
     *   counter towards the .backoffLimit is incremented.
     * Additional values are considered to be added in the future. Clients
     * should react to an unknown action by skipping the rule.
     */
    public string $action;

    /**
     * Represents the requirement on the container exit codes.
     */
    public ?PodFailurePolicyOnExitCodesRequirement $onExitCodes = null;

    /**
     * Represents the requirement on the pod conditions. The requirement is
     * represented as a list of pod condition patterns. The requirement is
     * satisfied if at least one pattern matches an actual pod condition. At
     * most 20 elements are allowed.
     */
    public ?PodFailurePolicyOnPodConditionsPatternSet $onPodConditions = null;

    public function __construct() {
        $this->onExitCodes = new PodFailurePolicyOnExitCodesRequirement();
        $this->onPodConditions = new PodFailurePolicyOnPodConditionsPatternSet();
    }
}
