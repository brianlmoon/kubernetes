<?php

namespace Moonspot\Kubernetes\Objects;

class ConfigMapEnvSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     */
    public ?string $name = null;

    /**
     * Specify whether the ConfigMap must be defined
     */
    public ?bool $optional = null;
}
