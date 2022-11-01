<?php

namespace Moonspot\Kubernetes\Objects;

class PodDisruptionBudgetSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * An eviction is allowed if at most "maxUnavailable" pods selected by
     * "selector" are unavailable after the eviction, i.e. even in absence of
     * the evicted pod. For example, one can prevent all voluntary evictions by
     * specifying 0. This is a mutually exclusive setting with "minAvailable".
     */
    public ?IntOrString $maxUnavailable = null;

    /**
     * An eviction is allowed if at least "minAvailable" pods selected by
     * "selector" will still be available after the eviction, i.e. even in the
     * absence of the evicted pod.  So for example you can prevent all
     * voluntary evictions by specifying "100%".
     */
    public ?IntOrString $minAvailable = null;

    /**
     * Label query over pods whose evictions are managed by the disruption
     * budget. A null selector will match no pods, while an empty ({}) selector
     * will select all pods within the namespace.
     */
    public ?LabelSelector $selector = null;

    public function __construct() {
        $this->maxUnavailable = new IntOrString();
        $this->minAvailable = new IntOrString();
        $this->selector = new LabelSelector();
    }
}
