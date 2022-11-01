<?php

namespace Moonspot\Kubernetes\Objects;

class ConfigMapKeySelector extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The key to select.
     */
    public string $key;

    /**
     * Name of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     */
    public ?string $name = null;

    /**
     * Specify whether the ConfigMap or its key must be defined
     */
    public ?bool $optional = null;
}
