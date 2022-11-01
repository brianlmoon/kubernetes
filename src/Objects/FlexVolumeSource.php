<?php

namespace Moonspot\Kubernetes\Objects;

class FlexVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * driver is the name of the driver to use for this volume.
     */
    public string $driver;

    /**
     * fsType is the filesystem type to mount. Must be a filesystem type
     * supported by the host operating system. Ex. "ext4", "xfs", "ntfs". The
     * default filesystem depends on FlexVolume script.
     */
    public ?string $fsType = null;

    /**
     * options is Optional: this field holds extra command options if any.
     */
    public ?array $options = null;

    /**
     * readOnly is Optional: defaults to false (read/write). ReadOnly here will
     * force the ReadOnly setting in VolumeMounts.
     */
    public ?bool $readOnly = null;

    /**
     * secretRef is Optional: secretRef is reference to the secret object
     * containing sensitive information to pass to the plugin scripts. This may
     * be empty if no secret object is specified. If the secret object contains
     * more than one secret, all secrets are passed to the plugin scripts.
     */
    public ?LocalObjectReference $secretRef = null;

    public function __construct() {
        $this->secretRef = new LocalObjectReference();
    }
}
