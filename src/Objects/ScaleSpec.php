<?php

namespace Moonspot\Kubernetes\Objects;

class ScaleSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * replicas is the desired number of instances for the scaled object.
     */
    public ?int $replicas = null;
}
