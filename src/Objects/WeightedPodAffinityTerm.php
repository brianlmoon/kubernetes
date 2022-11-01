<?php

namespace Moonspot\Kubernetes\Objects;

class WeightedPodAffinityTerm extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Required. A pod affinity term, associated with the corresponding weight.
     */
    public PodAffinityTerm $podAffinityTerm;

    /**
     * weight associated with matching the corresponding podAffinityTerm, in
     * the range 1-100.
     */
    public int $weight;

    public function __construct() {
        $this->podAffinityTerm = new PodAffinityTerm();
    }
}
