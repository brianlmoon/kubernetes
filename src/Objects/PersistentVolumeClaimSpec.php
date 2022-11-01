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
     * (PersistentVolumeClaim) * An existing custom resource that implements
     * data population (Alpha) In order to use custom resource types that
     * implement data population, the AnyVolumeDataSource feature gate must be
     * enabled. If the provisioner or an external controller can support the
     * specified data source, it will create a new volume based on the contents
     * of the specified data source.
     */
    public ?TypedLocalObjectReference $dataSource = null;

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
        $this->resources = new ResourceRequirements();
        $this->selector = new LabelSelector();
    }
}
