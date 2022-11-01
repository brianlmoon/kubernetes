<?php

namespace Moonspot\Kubernetes\Objects;

class SecretReference extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name is unique within a namespace to reference a secret resource.
     */
    public ?string $name = null;

    /**
     * Namespace defines the space within which the secret name must be unique.
     */
    public ?string $namespace = null;
}
