<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\TopologySelectorTermSet;
use Moonspot\Kubernetes\Objects\Sets\StringSet;

class StorageClass extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'StorageClass';

    public const VERSION = 'storage.k8s.io/v1beta1';

    /**
     * AllowVolumeExpansion shows whether the storage class allow volume expand
     */
    public ?bool $allowVolumeExpansion = null;

    /**
     * Restrict the node topologies where volumes can be dynamically
     * provisioned. Each volume plugin defines its own supported topology
     * specifications. An empty TopologySelectorTerm list means there is no
     * topology restriction. This field is only honored by servers that enable
     * the VolumeScheduling feature.
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
     * Dynamically provisioned PersistentVolumes of this storage class are
     * created with these mountOptions, e.g. ["ro", "soft"]. Not validated -
     * mount of the PVs will simply fail if one is invalid.
     */
    public ?StringSet $mountOptions = null;

    /**
     * Parameters holds the parameters for the provisioner that should create
     * volumes of this storage class.
     */
    public ?array $parameters = null;

    /**
     * Provisioner indicates the type of the provisioner.
     */
    public string $provisioner;

    /**
     * Dynamically provisioned PersistentVolumes of this storage class are
     * created with this reclaimPolicy. Defaults to Delete.
     */
    public ?string $reclaimPolicy = null;

    /**
     * VolumeBindingMode indicates how PersistentVolumeClaims should be
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