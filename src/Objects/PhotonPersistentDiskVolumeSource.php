<?php

namespace Moonspot\Kubernetes\Objects;

class PhotonPersistentDiskVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the
     * host operating system. Ex. "ext4", "xfs", "ntfs". Implicitly inferred to
     * be "ext4" if unspecified.
     */
    public ?string $fsType = null;

    /**
     * ID that identifies Photon Controller persistent disk
     */
    public string $pdID;
}
