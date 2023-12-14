<?php

namespace Moonspot\Kubernetes\Objects;

class Variable extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Expression is the expression that will be evaluated as the value of the
     * variable. The CEL expression has access to the same identifiers as the
     * CEL expressions in Validation.
     */
    public string $expression;

    /**
     * Name is the name of the variable. The name must be a valid CEL
     * identifier and unique among all variables. The variable can be accessed
     * in other expressions through `variables` For example, if name is "foo",
     * the variable will be available as `variables.foo`
     */
    public string $name;
}
