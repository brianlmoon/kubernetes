<?php

namespace Moonspot\Kubernetes\Objects;

class ResourceClaimTemplateSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ObjectMeta may contain labels and annotations that will be copied into
     * the PVC when creating it. No other fields are allowed and will be
     * rejected during validation.
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Spec for the ResourceClaim. The entire content is copied unchanged into
     * the ResourceClaim that gets created from this template. The same fields
     * as in a ResourceClaim are also valid here.
     */
    public ResourceClaimSpec $spec;

    public function __construct() {
        $this->metadata = new ObjectMeta();
        $this->spec = new ResourceClaimSpec();
    }
}
