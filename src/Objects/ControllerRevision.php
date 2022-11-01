<?php

namespace Moonspot\Kubernetes\Objects;

class ControllerRevision extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'ControllerRevision';

    public const VERSION = 'apps/v1';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * Data is the serialized representation of the state.
     */
    public ?RawExtension $data = null;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Revision indicates the revision of the state represented by Data.
     */
    public int $revision;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->data = new RawExtension();
        $this->metadata = new ObjectMeta();
    }
}
