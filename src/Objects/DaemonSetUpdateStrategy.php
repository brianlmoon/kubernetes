<?php

namespace Moonspot\Kubernetes\Objects;

class DaemonSetUpdateStrategy extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Rolling update config params. Present only if type = "RollingUpdate".
     */
    public ?RollingUpdateDaemonSet $rollingUpdate = null;

    /**
     * Type of daemon set update. Can be "RollingUpdate" or "OnDelete". Default
     * is RollingUpdate.
     */
    public ?string $type = null;

    public function __construct() {
        $this->rollingUpdate = new RollingUpdateDaemonSet();
    }
}
