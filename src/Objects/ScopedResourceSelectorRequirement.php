<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class ScopedResourceSelectorRequirement extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Represents a scope's relationship to a set of values. Valid operators
     * are In, NotIn, Exists, DoesNotExist.
     */
    public string $operator;

    /**
     * The name of the scope that the selector applies to.
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
