<?php

namespace Moonspot\Kubernetes\Objects;

class PodSchedulingGate extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name of the scheduling gate. Each scheduling gate must have a unique
     * name field.
     */
    public string $name;
}
