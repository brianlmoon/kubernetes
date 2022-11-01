<?php

namespace Moonspot\Kubernetes\Objects;

class Overhead extends \Moonspot\Kubernetes\BaseObject {

    /**
     * PodFixed represents the fixed resource overhead associated with running
     * a pod.
     */
    public ?array $podFixed = null;
}
