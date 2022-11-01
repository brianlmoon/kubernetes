<?php

namespace Moonspot\Kubernetes\Objects;

class StatefulSet extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'StatefulSet';

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
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Spec defines the desired identities of pods in this set.
     */
    public ?StatefulSetSpec $spec = null;

    /**
     * Status is the current status of Pods in this StatefulSet. This data may
     * be out of date by some window of time.
     */
    public ?StatefulSetStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new StatefulSetSpec();
        $this->status = new StatefulSetStatus();
    }
}
