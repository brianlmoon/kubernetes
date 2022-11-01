<?php

namespace Moonspot\Kubernetes\Objects;

class VsphereVirtualDiskVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the
     * host operating system. Ex. "ext4", "xfs", "ntfs". Implicitly inferred to
     * be "ext4" if unspecified.
     */
    public ?string $fsType = null;

    /**
     * Storage Policy Based Management (SPBM) profile ID associated with the
     * StoragePolicyName.
     */
    public ?string $storagePolicyID = null;

    /**
     * Storage Policy Based Management (SPBM) profile name.
     */
    public ?string $storagePolicyName = null;

    /**
     * Path that identifies vSphere volume vmdk
     */
    public string $volumePath;
}
