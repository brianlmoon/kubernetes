<?php

namespace Moonspot\Kubernetes\Objects;

class ServiceBackendPort extends \Moonspot\Kubernetes\BaseObject {

    /**
     * name is the name of the port on the Service. This is a mutually
     * exclusive setting with "Number".
     */
    public ?string $name = null;

    /**
     * number is the numerical port number (e.g. 80) on the Service. This is a
     * mutually exclusive setting with "Name".
     */
    public ?int $number = null;
}
