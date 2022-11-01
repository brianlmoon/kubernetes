<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class PersistentVolumeClaimSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * AccessModes contains the desired access modes the volume should have.
     * More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     */
    public ?StringSet $accessModes = null;

    /**
     * This field can be used to specify either: * An existing VolumeSnapshot
     * object (snapshot.storage.k8s.io/VolumeSnapshot) * An existing PVC
     * (PersistentVolumeClaim) If the provisioner or an external controller can
     * support the specified data source, it will create a new volume based on
     * the contents of the specified data source. If the AnyVolumeDataSource
     * feature gate is enabled, this field will always have the same contents
     * as the DataSourceRef field.
     */
    public ?TypedLocalObjectReference $dataSource = null;

    /**
     * Specifies the object from which to populate the volume with data, if a
     * non-empty volume is desired. This may be any local object from a
     * non-empty API group (non core object) or a PersistentVolumeClaim object.
     * When this field is specified, volume binding will only succeed if the
     * type of the specified object matches some installed volume populator or
     * dynamic provisioner. This field will replace the functionality of the
     * DataSource field and as such if both fields are non-empty, they must
     * have the same value. For backwards compatibility, both fields
     * (DataSource and DataSourceRef) will be set to the same value
     * automatically if one of them is empty and the other is non-empty. There
     * are two important differences between DataSource and DataSourceRef: *
     * While DataSource only allows two specific types of objects,
     * DataSourceRef
     *   allows any non-core object, as well as PersistentVolumeClaim objects.
     * * While DataSource ignores disallowed values (dropping them),
     * DataSourceRef
     *   preserves all values, and generates an error if a disallowed value is
     *   specified.
     * (Alpha) Using this field requires the AnyVolumeDataSource feature gate
     * to be enabled.
     */
    public ?TypedLocalObjectReference $dataSourceRef = null;

    /**
     * Resources represents the minimum resources the volume should have. More
     * info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources
     */
    public ?ResourceRequirements $resources = null;

    /**
     * A label query over volumes to consider for binding.
     */
    public ?LabelSelector $selector = null;

    /**
     * Name of the StorageClass required by the claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#class-1
     */
    public ?string $storageClassName = null;

    /**
     * volumeMode defines what type of volume is required by the claim. Value
     * of Filesystem is implied when not included in claim spec.
     */
    public ?string $volumeMode = null;

    /**
     * VolumeName is the binding reference to the PersistentVolume backing this
     * claim.
     */
    public ?string $volumeName = null;

    public function __construct() {
        $this->accessModes = new StringSet();
        $this->dataSource = new TypedLocalObjectReference();
        $this->dataSourceRef = new TypedLocalObjectReference();
        $this->resources = new ResourceRequirements();
        $this->selector = new LabelSelector();
    }
}
