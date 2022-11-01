<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;
use Moonspot\Kubernetes\Objects\Sets\PersistentVolumeClaimConditionSet;

class PersistentVolumeClaimStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * AccessModes contains the actual access modes the volume backing the PVC
     * has. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     */
    public ?StringSet $accessModes = null;

    /**
     * Represents the actual resources of the underlying volume.
     */
    public ?array $capacity = null;

    /**
     * Current Condition of persistent volume claim. If underlying persistent
     * volume is being resized then the Condition will be set to
     * 'ResizeStarted'.
     */
    public ?PersistentVolumeClaimConditionSet $conditions = null;

    /**
     * Phase represents the current phase of PersistentVolumeClaim.
     */
    public ?string $phase = null;

    public function __construct() {
        $this->accessModes = new StringSet();
        $this->conditions = new PersistentVolumeClaimConditionSet();
    }
}
