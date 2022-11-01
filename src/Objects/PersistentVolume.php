<?php

namespace Moonspot\Kubernetes\Objects;

class PersistentVolume extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'PersistentVolume';

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
     * spec defines a specification of a persistent volume owned by the
     * cluster. Provisioned by an administrator. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistent-volumes
     */
    public ?PersistentVolumeSpec $spec = null;

    /**
     * status represents the current information/status for the persistent
     * volume. Populated by the system. Read-only. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistent-volumes
     */
    public ?PersistentVolumeStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new PersistentVolumeSpec();
        $this->status = new PersistentVolumeStatus();
    }
}
