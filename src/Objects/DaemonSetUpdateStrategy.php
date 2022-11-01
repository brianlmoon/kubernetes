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
     * 
     * Possible enum values:
     *  - `"OnDelete"` Replace the old daemons only when it's killed
     *  - `"RollingUpdate"` Replace the old daemons by new ones using rolling
     * update i.e replace them on each node one after the other.
     */
    public ?string $type = null;

    public function __construct() {
        $this->rollingUpdate = new RollingUpdateDaemonSet();
    }
}
