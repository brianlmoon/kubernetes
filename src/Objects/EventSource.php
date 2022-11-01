<?php

namespace Moonspot\Kubernetes\Objects;

class EventSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Component from which the event is generated.
     */
    public ?string $component = null;

    /**
     * Node name on which the event is generated.
     */
    public ?string $host = null;
}
