<?php

namespace Moonspot\Kubernetes\Objects;

class SelfSubjectAccessReviewSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * NonResourceAttributes describes information for a non-resource access
     * request
     */
    public ?NonResourceAttributes $nonResourceAttributes = null;

    /**
     * ResourceAuthorizationAttributes describes information for a resource
     * access request
     */
    public ?ResourceAttributes $resourceAttributes = null;

    public function __construct() {
        $this->nonResourceAttributes = new NonResourceAttributes();
        $this->resourceAttributes = new ResourceAttributes();
    }
}
