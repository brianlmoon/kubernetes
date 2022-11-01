<?php

namespace Moonspot\Kubernetes\Objects;

class StorageVersion extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'StorageVersion';

    public const VERSION = 'apiserverinternal.k8s.io/v1alpha1';

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
     * The name is <group>.<resource>.
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Spec is an empty spec. It is here to comply with Kubernetes API style.
     */
    public StorageVersionSpec $spec;

    /**
     * API server instances report the version they can decode and the version
     * they encode objects to when persisting objects in the backend.
     */
    public StorageVersionStatus $status;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new StorageVersionSpec();
        $this->status = new StorageVersionStatus();
    }
}
