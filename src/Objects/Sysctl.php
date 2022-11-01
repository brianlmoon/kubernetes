<?php

namespace Moonspot\Kubernetes\Objects;

class Sysctl extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name of a property to set
     */
    public string $name;

    /**
     * Value of a property to set
     */
    public string $value;
}
