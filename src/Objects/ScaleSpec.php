<?php

namespace Moonspot\Kubernetes\Objects;

class ScaleSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * desired number of instances for the scaled object.
     */
    public ?int $replicas = null;
}
