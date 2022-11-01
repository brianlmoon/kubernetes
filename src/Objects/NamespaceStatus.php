<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\NamespaceConditionSet;

class NamespaceStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Represents the latest available observations of a namespace's current
     * state.
     */
    public ?NamespaceConditionSet $conditions = null;

    /**
     * Phase is the current lifecycle phase of the namespace. More info:
     * https://kubernetes.io/docs/tasks/administer-cluster/namespaces/
     */
    public ?string $phase = null;

    public function __construct() {
        $this->conditions = new NamespaceConditionSet();
    }
}
