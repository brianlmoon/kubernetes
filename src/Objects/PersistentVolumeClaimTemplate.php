<?php

namespace Moonspot\Kubernetes\Objects;

class PersistentVolumeClaimTemplate extends \Moonspot\Kubernetes\BaseObject {

    /**
     * May contain labels and annotations that will be copied into the PVC when
     * creating it. No other fields are allowed and will be rejected during
     * validation.
     */
    public ?ObjectMeta $metadata = null;

    /**
     * The specification for the PersistentVolumeClaim. The entire content is
     * copied unchanged into the PVC that gets created from this template. The
     * same fields as in a PersistentVolumeClaim are also valid here.
     */
    public PersistentVolumeClaimSpec $spec;

    public function __construct() {
        $this->metadata = new ObjectMeta();
        $this->spec = new PersistentVolumeClaimSpec();
    }
}
