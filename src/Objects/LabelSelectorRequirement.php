<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class LabelSelectorRequirement extends \Moonspot\Kubernetes\BaseObject {

    /**
     * key is the label key that the selector applies to.
     */
    public string $key;

    /**
     * operator represents a key's relationship to a set of values. Valid
     * operators are In, NotIn, Exists and DoesNotExist.
     */
    public string $operator;

    /**
     * values is an array of string values. If the operator is In or NotIn, the
     * values array must be non-empty. If the operator is Exists or
     * DoesNotExist, the values array must be empty. This array is replaced
     * during a strategic merge patch.
     */
    public ?StringSet $values = null;

    public function __construct() {
        $this->values = new StringSet();
    }
}
