<?php

namespace Moonspot\Kubernetes\Objects;

class CinderPersistentVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * fsType Filesystem type to mount. Must be a filesystem type supported by
     * the host operating system. Examples: "ext4", "xfs", "ntfs". Implicitly
     * inferred to be "ext4" if unspecified. More info:
     * https://examples.k8s.io/mysql-cinder-pd/README.md
     */
    public ?string $fsType = null;

    /**
     * readOnly is Optional: Defaults to false (read/write). ReadOnly here will
     * force the ReadOnly setting in VolumeMounts. More info:
     * https://examples.k8s.io/mysql-cinder-pd/README.md
     */
    public ?bool $readOnly = null;

    /**
     * secretRef is Optional: points to a secret object containing parameters
     * used to connect to OpenStack.
     */
    public ?SecretReference $secretRef = null;

    /**
     * volumeID used to identify the volume in cinder. More info:
     * https://examples.k8s.io/mysql-cinder-pd/README.md
     */
    public string $volumeID;

    public function __construct() {
        $this->secretRef = new SecretReference();
    }
}
