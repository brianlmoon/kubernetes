<?php

namespace Moonspot\Kubernetes\Objects;

class VolumeNodeAffinity extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Required specifies hard node constraints that must be met.
     */
    public ?NodeSelector $required = null;

    public function __construct() {
        $this->required = new NodeSelector();
    }
}
