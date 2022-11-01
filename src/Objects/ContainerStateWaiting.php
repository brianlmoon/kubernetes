<?php

namespace Moonspot\Kubernetes\Objects;

class ContainerStateWaiting extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Message regarding why the container is not yet running.
     */
    public ?string $message = null;

    /**
     * (brief) reason the container is not yet running.
     */
    public ?string $reason = null;
}
