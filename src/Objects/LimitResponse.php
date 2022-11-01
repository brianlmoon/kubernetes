<?php

namespace Moonspot\Kubernetes\Objects;

class LimitResponse extends \Moonspot\Kubernetes\BaseObject {

    /**
     * `queuing` holds the configuration parameters for queuing. This field may
     * be non-empty only if `type` is `"Queue"`.
     */
    public ?QueuingConfiguration $queuing = null;

    /**
     * `type` is "Queue" or "Reject". "Queue" means that requests that can not
     * be executed upon arrival are held in a queue until they can be executed
     * or a queuing limit is reached. "Reject" means that requests that can not
     * be executed upon arrival are rejected. Required.
     */
    public string $type;

    public function __construct() {
        $this->queuing = new QueuingConfiguration();
    }
}
