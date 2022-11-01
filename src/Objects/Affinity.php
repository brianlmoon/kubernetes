<?php

namespace Moonspot\Kubernetes\Objects;

class Affinity extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Describes node affinity scheduling rules for the pod.
     */
    public ?NodeAffinity $nodeAffinity = null;

    /**
     * Describes pod affinity scheduling rules (e.g. co-locate this pod in the
     * same node, zone, etc. as some other pod(s)).
     */
    public ?PodAffinity $podAffinity = null;

    /**
     * Describes pod anti-affinity scheduling rules (e.g. avoid putting this
     * pod in the same node, zone, etc. as some other pod(s)).
     */
    public ?PodAntiAffinity $podAntiAffinity = null;

    public function __construct() {
        $this->nodeAffinity = new NodeAffinity();
        $this->podAffinity = new PodAffinity();
        $this->podAntiAffinity = new PodAntiAffinity();
    }
}
