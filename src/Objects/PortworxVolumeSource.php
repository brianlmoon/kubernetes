<?php

namespace Moonspot\Kubernetes\Objects;

class PortworxVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * fSType represents the filesystem type to mount Must be a filesystem type
     * supported by the host operating system. Ex. "ext4", "xfs". Implicitly
     * inferred to be "ext4" if unspecified.
     */
    public ?string $fsType = null;

    /**
     * readOnly defaults to false (read/write). ReadOnly here will force the
     * ReadOnly setting in VolumeMounts.
     */
    public ?bool $readOnly = null;

    /**
     * volumeID uniquely identifies a Portworx volume
     */
    public string $volumeID;
}
