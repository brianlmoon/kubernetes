<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class TopologySelectorLabelRequirement extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The label key that the selector applies to.
     */
    public string $key;

    /**
     * An array of string values. One value must match the label to be
     * selected. Each entry in Values is ORed.
     */
    public StringSet $values;

    public function __construct() {
        $this->values = new StringSet();
    }
}
