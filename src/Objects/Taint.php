<?php

namespace Moonspot\Kubernetes\Objects;

class Taint extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Required. The effect of the taint on pods that do not tolerate the
     * taint. Valid effects are NoSchedule, PreferNoSchedule and NoExecute.
     */
    public string $effect;

    /**
     * Required. The taint key to be applied to a node.
     */
    public string $key;

    /**
     * TimeAdded represents the time at which the taint was added. It is only
     * written for NoExecute taints.
     */
    public ?Time $timeAdded = null;

    /**
     * The taint value corresponding to the taint key.
     */
    public ?string $value = null;

    public function __construct() {
        $this->timeAdded = new Time();
    }
}
