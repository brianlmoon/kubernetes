<?php

namespace Moonspot\Kubernetes\Objects;

class PodSchedulingContext extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'PodSchedulingContext';

    public const VERSION = 'resource.k8s.io/v1alpha2';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * Standard object metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Spec describes where resources for the Pod are needed.
     */
    public PodSchedulingContextSpec $spec;

    /**
     * Status describes where resources for the Pod can be allocated.
     */
    public ?PodSchedulingContextStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new PodSchedulingContextSpec();
        $this->status = new PodSchedulingContextStatus();
    }
}
