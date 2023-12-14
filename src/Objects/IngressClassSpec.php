<?php

namespace Moonspot\Kubernetes\Objects;

class IngressClassSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * controller refers to the name of the controller that should handle this
     * class. This allows for different "flavors" that are controlled by the
     * same controller. For example, you may have different parameters for the
     * same implementing controller. This should be specified as a
     * domain-prefixed path no more than 250 characters in length, e.g.
     * "acme.io/ingress-controller". This field is immutable.
     */
    public ?string $controller = null;

    /**
     * parameters is a link to a custom resource containing additional
     * configuration for the controller. This is optional if the controller
     * does not require extra parameters.
     */
    public ?IngressClassParametersReference $parameters = null;

    public function __construct() {
        $this->parameters = new IngressClassParametersReference();
    }
}
