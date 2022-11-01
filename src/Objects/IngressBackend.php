<?php

namespace Moonspot\Kubernetes\Objects;

class IngressBackend extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Resource is an ObjectRef to another Kubernetes resource in the namespace
     * of the Ingress object. If resource is specified, a service.Name and
     * service.Port must not be specified. This is a mutually exclusive setting
     * with "Service".
     */
    public ?TypedLocalObjectReference $resource = null;

    /**
     * Service references a Service as a Backend. This is a mutually exclusive
     * setting with "Resource".
     */
    public ?IngressServiceBackend $service = null;

    public function __construct() {
        $this->resource = new TypedLocalObjectReference();
        $this->service = new IngressServiceBackend();
    }
}
