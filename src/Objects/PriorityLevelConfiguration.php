<?php

namespace Moonspot\Kubernetes\Objects;

class PriorityLevelConfiguration extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'PriorityLevelConfiguration';

    public const VERSION = 'flowcontrol.k8s.io/v1beta1';

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
     * `metadata` is the standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * `spec` is the specification of the desired behavior of a
     * "request-priority". More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     */
    public ?PriorityLevelConfigurationSpec $spec = null;

    /**
     * `status` is the current status of a "request-priority". More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     */
    public ?PriorityLevelConfigurationStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new PriorityLevelConfigurationSpec();
        $this->status = new PriorityLevelConfigurationStatus();
    }
}
