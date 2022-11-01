<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class NonResourcePolicyRule extends \Moonspot\Kubernetes\BaseObject {

    /**
     * `nonResourceURLs` is a set of url prefixes that a user should have
     * access to and may not be empty. For example:
     *   - "/healthz" is legal
     *   - "/hea*" is illegal
     *   - "/hea" is legal but matches nothing
     *   - "/hea/*" also matches nothing
     *   - "/healthz/*" matches all per-component health checks.
     * "*" matches all non-resource urls. if it is present, it must be the only
     * entry. Required.
     */
    public StringSet $nonResourceURLs;

    /**
     * `verbs` is a list of matching verbs and may not be empty. "*" matches
     * all verbs. If it is present, it must be the only entry. Required.
     */
    public StringSet $verbs;

    public function __construct() {
        $this->nonResourceURLs = new StringSet();
        $this->verbs = new StringSet();
    }
}
