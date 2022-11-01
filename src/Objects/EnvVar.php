<?php

namespace Moonspot\Kubernetes\Objects;

class EnvVar extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name of the environment variable. Must be a C_IDENTIFIER.
     */
    public string $name;

    /**
     * Variable references $(VAR_NAME) are expanded using the previous defined
     * environment variables in the container and any service environment
     * variables. If a variable cannot be resolved, the reference in the input
     * string will be unchanged. The $(VAR_NAME) syntax can be escaped with a
     * double $$, ie: $$(VAR_NAME). Escaped references will never be expanded,
     * regardless of whether the variable exists or not. Defaults to "".
     */
    public ?string $value = null;

    /**
     * Source for the environment variable's value. Cannot be used if value is
     * not empty.
     */
    public ?EnvVarSource $valueFrom = null;

    public function __construct() {
        $this->valueFrom = new EnvVarSource();
    }
}
