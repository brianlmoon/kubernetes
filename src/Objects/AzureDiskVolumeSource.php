<?php

namespace Moonspot\Kubernetes\Objects;

class AzureDiskVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Host Caching mode: None, Read Only, Read Write.
     */
    public ?string $cachingMode = null;

    /**
     * The Name of the data disk in the blob storage
     */
    public string $diskName;

    /**
     * The URI the data disk in the blob storage
     */
    public string $diskURI;

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the
     * host operating system. Ex. "ext4", "xfs", "ntfs". Implicitly inferred to
     * be "ext4" if unspecified.
     */
    public ?string $fsType = null;

    /**
     * Expected values Shared: multiple blob disks per storage account 
     * Dedicated: single blob disk per storage account  Managed: azure managed
     * data disk (only in managed availability set). defaults to shared
     */
    public ?string $kind = null;

    /**
     * Defaults to false (read/write). ReadOnly here will force the ReadOnly
     * setting in VolumeMounts.
     */
    public ?bool $readOnly = null;
}
