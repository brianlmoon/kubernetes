<?php

namespace Moonspot\Kubernetes\Objects;

class ScaleIOVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the
     * host operating system. Ex. "ext4", "xfs", "ntfs". Default is "xfs".
     */
    public ?string $fsType = null;

    /**
     * The host address of the ScaleIO API Gateway.
     */
    public string $gateway;

    /**
     * The name of the ScaleIO Protection Domain for the configured storage.
     */
    public ?string $protectionDomain = null;

    /**
     * Defaults to false (read/write). ReadOnly here will force the ReadOnly
     * setting in VolumeMounts.
     */
    public ?bool $readOnly = null;

    /**
     * SecretRef references to the secret for ScaleIO user and other sensitive
     * information. If this is not provided, Login operation will fail.
     */
    public LocalObjectReference $secretRef;

    /**
     * Flag to enable/disable SSL communication with Gateway, default false
     */
    public ?bool $sslEnabled = null;

    /**
     * Indicates whether the storage for a volume should be ThickProvisioned or
     * ThinProvisioned. Default is ThinProvisioned.
     */
    public ?string $storageMode = null;

    /**
     * The ScaleIO Storage Pool associated with the protection domain.
     */
    public ?string $storagePool = null;

    /**
     * The name of the storage system as configured in ScaleIO.
     */
    public string $system;

    /**
     * The name of a volume already created in the ScaleIO system that is
     * associated with this volume source.
     */
    public ?string $volumeName = null;

    public function __construct() {
        $this->secretRef = new LocalObjectReference();
    }
}
