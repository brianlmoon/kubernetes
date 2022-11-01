<?php

namespace Moonspot\Kubernetes\Objects;

class FlowDistinguisherMethod extends \Moonspot\Kubernetes\BaseObject {

    /**
     * `type` is the type of flow distinguisher method The supported types are
     * "ByUser" and "ByNamespace". Required.
     */
    public string $type;
}
