<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class ScopedResourceSelectorRequirement extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Represents a scope's relationship to a set of values. Valid operators
     * are In, NotIn, Exists, DoesNotExist.
     * 
     * Possible enum values:
     *  - `"DoesNotExist"`
     *  - `"Exists"`
     *  - `"In"`
     *  - `"NotIn"`
     */
    public string $operator;

    /**
     * The name of the scope that the selector applies to.
     * 
     * Possible enum values:
     *  - `"BestEffort"` Match all pod objects that have best effort quality of
     * service
     *  - `"CrossNamespacePodAffinity"` Match all pod objects that have
     * cross-namespace pod (anti)affinity mentioned. This is a beta feature
     * enabled by the PodAffinityNamespaceSelector feature flag.
     *  - `"NotBestEffort"` Match all pod objects that do not have best effort
     * quality of service
     *  - `"NotTerminating"` Match all pod objects where
     * spec.activeDeadlineSeconds is nil
     *  - `"PriorityClass"` Match all pod objects that have priority class
     * mentioned
     *  - `"Terminating"` Match all pod objects where
     * spec.activeDeadlineSeconds >=0
     */
    public string $scopeName;

    /**
     * An array of string values. If the operator is In or NotIn, the values
     * array must be non-empty. If the operator is Exists or DoesNotExist, the
     * values array must be empty. This array is replaced during a strategic
     * merge patch.
     */
    public ?StringSet $values = null;

    public function __construct() {
        $this->values = new StringSet();
    }
}
