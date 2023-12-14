<?php

namespace Moonspot\Kubernetes\Objects;

class IPAddressSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ParentRef references the resource that an IPAddress is attached to. An
     * IPAddress must reference a parent object.
     */
    public ?ParentReference $parentRef = null;

    public function __construct() {
        $this->parentRef = new ParentReference();
    }
}
