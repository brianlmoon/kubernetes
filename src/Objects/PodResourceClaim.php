<?php

namespace Moonspot\Kubernetes\Objects;

class PodResourceClaim extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name uniquely identifies this resource claim inside the pod. This must
     * be a DNS_LABEL.
     */
    public string $name;

    /**
     * Source describes where to find the ResourceClaim.
     */
    public ?ClaimSource $source = null;

    public function __construct() {
        $this->source = new ClaimSource();
    }
}
