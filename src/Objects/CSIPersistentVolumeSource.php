<?php

namespace Moonspot\Kubernetes\Objects;

class CSIPersistentVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ControllerExpandSecretRef is a reference to the secret object containing
     * sensitive information to pass to the CSI driver to complete the CSI
     * ControllerExpandVolume call. This is an alpha field and requires
     * enabling ExpandCSIVolumes feature gate. This field is optional, and may
     * be empty if no secret is required. If the secret object contains more
     * than one secret, all secrets are passed.
     */
    public ?SecretReference $controllerExpandSecretRef = null;

    /**
     * ControllerPublishSecretRef is a reference to the secret object
     * containing sensitive information to pass to the CSI driver to complete
     * the CSI ControllerPublishVolume and ControllerUnpublishVolume calls.
     * This field is optional, and may be empty if no secret is required. If
     * the secret object contains more than one secret, all secrets are passed.
     */
    public ?SecretReference $controllerPublishSecretRef = null;

    /**
     * Driver is the name of the driver to use for this volume. Required.
     */
    public string $driver;

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the
     * host operating system. Ex. "ext4", "xfs", "ntfs".
     */
    public ?string $fsType = null;

    /**
     * NodePublishSecretRef is a reference to the secret object containing
     * sensitive information to pass to the CSI driver to complete the CSI
     * NodePublishVolume and NodeUnpublishVolume calls. This field is optional,
     * and may be empty if no secret is required. If the secret object contains
     * more than one secret, all secrets are passed.
     */
    public ?SecretReference $nodePublishSecretRef = null;

    /**
     * NodeStageSecretRef is a reference to the secret object containing
     * sensitive information to pass to the CSI driver to complete the CSI
     * NodeStageVolume and NodeStageVolume and NodeUnstageVolume calls. This
     * field is optional, and may be empty if no secret is required. If the
     * secret object contains more than one secret, all secrets are passed.
     */
    public ?SecretReference $nodeStageSecretRef = null;

    /**
     * Optional: The value to pass to ControllerPublishVolumeRequest. Defaults
     * to false (read/write).
     */
    public ?bool $readOnly = null;

    /**
     * Attributes of the volume to publish.
     */
    public ?array $volumeAttributes = null;

    /**
     * VolumeHandle is the unique volume name returned by the CSI volume
     * plugin’s CreateVolume to refer to the volume on all subsequent calls.
     * Required.
     */
    public string $volumeHandle;

    public function __construct() {
        $this->controllerExpandSecretRef = new SecretReference();
        $this->controllerPublishSecretRef = new SecretReference();
        $this->nodePublishSecretRef = new SecretReference();
        $this->nodeStageSecretRef = new SecretReference();
    }
}
