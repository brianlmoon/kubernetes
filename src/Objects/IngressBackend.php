<?php

namespace Moonspot\Kubernetes\Objects;

class IngressBackend extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Resource is an ObjectRef to another Kubernetes resource in the namespace
     * of the Ingress object. If resource is specified, serviceName and
     * servicePort must not be specified.
     */
    public ?TypedLocalObjectReference $resource = null;

    /**
     * Specifies the name of the referenced service.
     */
    public ?string $serviceName = null;

    /**
     * Specifies the port of the referenced service.
     */
    public ?IntOrString $servicePort = null;

    public function __construct() {
        $this->resource = new TypedLocalObjectReference();
        $this->servicePort = new IntOrString();
    }
}
