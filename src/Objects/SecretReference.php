<?php

namespace Moonspot\Kubernetes\Objects;

class SecretReference extends \Moonspot\Kubernetes\BaseObject {

    /**
     * name is unique within a namespace to reference a secret resource.
     */
    public ?string $name = null;

    /**
     * namespace defines the space within which the secret name must be unique.
     */
    public ?string $namespace = null;
}
