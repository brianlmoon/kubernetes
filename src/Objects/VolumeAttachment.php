<?php

namespace Moonspot\Kubernetes\Objects;

class VolumeAttachment extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'VolumeAttachment';

    public const VERSION = 'storage.k8s.io/v1beta1';

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
     * Standard object metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Specification of the desired attach/detach volume behavior. Populated by
     * the Kubernetes system.
     */
    public VolumeAttachmentSpec $spec;

    /**
     * Status of the VolumeAttachment request. Populated by the entity
     * completing the attach or detach operation, i.e. the external-attacher.
     */
    public ?VolumeAttachmentStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new VolumeAttachmentSpec();
        $this->status = new VolumeAttachmentStatus();
    }
}
