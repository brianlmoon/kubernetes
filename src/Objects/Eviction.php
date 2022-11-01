<?php

namespace Moonspot\Kubernetes\Objects;

class Eviction extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'Eviction';

    public const VERSION = 'policy/v1beta1';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * DeleteOptions may be provided
     */
    public ?DeleteOptions $deleteOptions = null;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * ObjectMeta describes the pod that is being evicted.
     */
    public ?ObjectMeta $metadata = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->deleteOptions = new DeleteOptions();
        $this->metadata = new ObjectMeta();
    }
}
