<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\TopologySelectorTermSet;
use Moonspot\Kubernetes\Objects\Sets\StringSet;

class StorageClass extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'StorageClass';

    public const VERSION = 'storage.k8s.io/v1';

    /**
     * allowVolumeExpansion shows whether the storage class allow volume
     * expand.
     */
    public ?bool $allowVolumeExpansion = null;

    /**
     * allowedTopologies restrict the node topologies where volumes can be
     * dynamically provisioned. Each volume plugin defines its own supported
     * topology specifications. An empty TopologySelectorTerm list means there
     * is no topology restriction. This field is only honored by servers that
     * enable the VolumeScheduling feature.
     */
    public ?TopologySelectorTermSet $allowedTopologies = null;

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
     * mountOptions controls the mountOptions for dynamically provisioned
     * PersistentVolumes of this storage class. e.g. ["ro", "soft"]. Not
     * validated - mount of the PVs will simply fail if one is invalid.
     */
    public ?StringSet $mountOptions = null;

    /**
     * parameters holds the parameters for the provisioner that should create
     * volumes of this storage class.
     */
    public ?array $parameters = null;

    /**
     * provisioner indicates the type of the provisioner.
     */
    public string $provisioner;

    /**
     * reclaimPolicy controls the reclaimPolicy for dynamically provisioned
     * PersistentVolumes of this storage class. Defaults to Delete.
     */
    public ?string $reclaimPolicy = null;

    /**
     * volumeBindingMode indicates how PersistentVolumeClaims should be
     * provisioned and bound.  When unset, VolumeBindingImmediate is used. This
     * field is only honored by servers that enable the VolumeScheduling
     * feature.
     */
    public ?string $volumeBindingMode = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->allowedTopologies = new TopologySelectorTermSet();
        $this->metadata = new ObjectMeta();
        $this->mountOptions = new StringSet();
    }
}
