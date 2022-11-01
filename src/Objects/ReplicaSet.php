<?php

namespace Moonspot\Kubernetes\Objects;

class ReplicaSet extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'ReplicaSet';

    public const VERSION = 'apps/v1';

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
     * If the Labels of a ReplicaSet are empty, they are defaulted to be the
     * same as the Pod(s) that the ReplicaSet manages. Standard object's
     * metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Spec defines the specification of the desired behavior of the
     * ReplicaSet. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     */
    public ?ReplicaSetSpec $spec = null;

    /**
     * Status is the most recently observed status of the ReplicaSet. This data
     * may be out of date by some window of time. Populated by the system.
     * Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     */
    public ?ReplicaSetStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new ReplicaSetSpec();
        $this->status = new ReplicaSetStatus();
    }
}
