<?php

namespace Moonspot\Kubernetes\Objects;

class PodDNSConfigOption extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Required.
     */
    public ?string $name = null;


    public ?string $value = null;
}
