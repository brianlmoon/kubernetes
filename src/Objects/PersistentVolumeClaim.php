<?php

namespace Moonspot\Kubernetes\Objects;

class PersistentVolumeClaim extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'PersistentVolumeClaim';

    public const VERSION = 'v1';

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
     * spec defines the desired characteristics of a volume requested by a pod
     * author. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     */
    public ?PersistentVolumeClaimSpec $spec = null;

    /**
     * status represents the current information/status of a persistent volume
     * claim. Read-only. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     */
    public ?PersistentVolumeClaimStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new PersistentVolumeClaimSpec();
        $this->status = new PersistentVolumeClaimStatus();
    }
}
