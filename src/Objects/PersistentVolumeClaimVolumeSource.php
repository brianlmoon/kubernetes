<?php

namespace Moonspot\Kubernetes\Objects;

class PersistentVolumeClaimVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ClaimName is the name of a PersistentVolumeClaim in the same namespace
     * as the pod using this volume. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     */
    public string $claimName;

    /**
     * Will force the ReadOnly setting in VolumeMounts. Default false.
     */
    public ?bool $readOnly = null;
}
