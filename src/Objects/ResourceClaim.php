<?php

namespace Moonspot\Kubernetes\Objects;

class ResourceClaim extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'ResourceClaim';

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
     * Spec describes the desired attributes of a resource that then needs to
     * be allocated. It can only be set once when creating the ResourceClaim.
     */
    public ResourceClaimSpec $spec;

    /**
     * Status describes whether the resource is available and with which
     * attributes.
     */
    public ?ResourceClaimStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new ResourceClaimSpec();
        $this->status = new ResourceClaimStatus();
    }
}
