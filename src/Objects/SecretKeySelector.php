<?php

namespace Moonspot\Kubernetes\Objects;

class SecretKeySelector extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The key of the secret to select from.  Must be a valid secret key.
     */
    public string $key;

    /**
     * Name of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     */
    public ?string $name = null;

    /**
     * Specify whether the Secret or its key must be defined
     */
    public ?bool $optional = null;
}
