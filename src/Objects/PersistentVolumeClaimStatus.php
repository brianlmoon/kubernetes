<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;
use Moonspot\Kubernetes\Objects\Sets\PersistentVolumeClaimConditionSet;

class PersistentVolumeClaimStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * accessModes contains the actual access modes the volume backing the PVC
     * has. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     */
    public ?StringSet $accessModes = null;

    /**
     * allocatedResources is the storage resource within AllocatedResources
     * tracks the capacity allocated to a PVC. It may be larger than the actual
     * capacity when a volume expansion operation is requested. For storage
     * quota, the larger value from allocatedResources and PVC.spec.resources
     * is used. If allocatedResources is not set, PVC.spec.resources alone is
     * used for quota calculation. If a volume expansion capacity request is
     * lowered, allocatedResources is only lowered if there are no expansion
     * operations in progress and if the actual volume capacity is equal or
     * lower than the requested capacity. This is an alpha field and requires
     * enabling RecoverVolumeExpansionFailure feature.
     */
    public ?array $allocatedResources = null;

    /**
     * capacity represents the actual resources of the underlying volume.
     */
    public ?array $capacity = null;

    /**
     * conditions is the current Condition of persistent volume claim. If
     * underlying persistent volume is being resized then the Condition will be
     * set to 'ResizeStarted'.
     */
    public ?PersistentVolumeClaimConditionSet $conditions = null;

    /**
     * phase represents the current phase of PersistentVolumeClaim.
     */
    public ?string $phase = null;

    /**
     * resizeStatus stores status of resize operation. ResizeStatus is not set
     * by default but when expansion is complete resizeStatus is set to empty
     * string by resize controller or kubelet. This is an alpha field and
     * requires enabling RecoverVolumeExpansionFailure feature.
     */
    public ?string $resizeStatus = null;

    public function __construct() {
        $this->accessModes = new StringSet();
        $this->conditions = new PersistentVolumeClaimConditionSet();
    }
}
