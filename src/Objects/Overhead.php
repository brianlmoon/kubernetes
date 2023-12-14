<?php

namespace Moonspot\Kubernetes\Objects;

class Overhead extends \Moonspot\Kubernetes\BaseObject {

    /**
     * podFixed represents the fixed resource overhead associated with running
     * a pod.
     */
    public ?array $podFixed = null;
}
