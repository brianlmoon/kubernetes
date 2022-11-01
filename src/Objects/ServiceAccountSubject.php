<?php

namespace Moonspot\Kubernetes\Objects;

class ServiceAccountSubject extends \Moonspot\Kubernetes\BaseObject {

    /**
     * `name` is the name of matching ServiceAccount objects, or "*" to match
     * regardless of name. Required.
     */
    public string $name;

    /**
     * `namespace` is the namespace of matching ServiceAccount objects.
     * Required.
     */
    public string $namespace;
}
