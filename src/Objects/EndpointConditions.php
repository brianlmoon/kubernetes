<?php

namespace Moonspot\Kubernetes\Objects;

class EndpointConditions extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ready indicates that this endpoint is prepared to receive traffic,
     * according to whatever system is managing the endpoint. A nil value
     * indicates an unknown state. In most cases consumers should interpret
     * this unknown state as ready. For compatibility reasons, ready should
     * never be "true" for terminating endpoints.
     */
    public ?bool $ready = null;

    /**
     * serving is identical to ready except that it is set regardless of the
     * terminating state of endpoints. This condition should be set to true for
     * a ready endpoint that is terminating. If nil, consumers should defer to
     * the ready condition.
     */
    public ?bool $serving = null;

    /**
     * terminating indicates that this endpoint is terminating. A nil value
     * indicates an unknown state. Consumers should interpret this unknown
     * state to mean that the endpoint is not terminating.
     */
    public ?bool $terminating = null;
}
