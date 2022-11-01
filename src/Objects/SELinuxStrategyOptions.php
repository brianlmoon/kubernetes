<?php

namespace Moonspot\Kubernetes\Objects;

class SELinuxStrategyOptions extends \Moonspot\Kubernetes\BaseObject {

    /**
     * rule is the strategy that will dictate the allowable labels that may be
     * set.
     */
    public string $rule;

    /**
     * seLinuxOptions required to run as; required for MustRunAs More info:
     * https://kubernetes.io/docs/tasks/configure-pod-container/security-context/
     */
    public ?SELinuxOptions $seLinuxOptions = null;

    public function __construct() {
        $this->seLinuxOptions = new SELinuxOptions();
    }
}
