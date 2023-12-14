<?php

namespace Moonspot\Kubernetes\Objects;

class HorizontalPodAutoscaler extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'HorizontalPodAutoscaler';

    public const VERSION = 'autoscaling/v2';

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
     * metadata is the standard object metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * spec is the specification for the behaviour of the autoscaler. More
     * info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status.
     */
    public ?HorizontalPodAutoscalerSpec $spec = null;

    /**
     * status is the current information about the autoscaler.
     */
    public ?HorizontalPodAutoscalerStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new HorizontalPodAutoscalerSpec();
        $this->status = new HorizontalPodAutoscalerStatus();
    }
}
