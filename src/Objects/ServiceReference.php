<?php

namespace Moonspot\Kubernetes\Objects;

class ServiceReference extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name is the name of the service
     */
    public ?string $name = null;

    /**
     * Namespace is the namespace of the service
     */
    public ?string $namespace = null;

    /**
     * If specified, the port on the service that hosting webhook. Default to
     * 443 for backward compatibility. `port` should be a valid port number
     * (1-65535, inclusive).
     */
    public ?int $port = null;
}
