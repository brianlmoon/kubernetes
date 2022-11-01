<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\TolerationSet;

class Scheduling extends \Moonspot\Kubernetes\BaseObject {

    /**
     * nodeSelector lists labels that must be present on nodes that support
     * this RuntimeClass. Pods using this RuntimeClass can only be scheduled to
     * a node matched by this selector. The RuntimeClass nodeSelector is merged
     * with a pod's existing nodeSelector. Any conflicts will cause the pod to
     * be rejected in admission.
     */
    public ?array $nodeSelector = null;

    /**
     * tolerations are appended (excluding duplicates) to pods running with
     * this RuntimeClass during admission, effectively unioning the set of
     * nodes tolerated by the pod and the RuntimeClass.
     */
    public ?TolerationSet $tolerations = null;

    public function __construct() {
        $this->tolerations = new TolerationSet();
    }
}
