<?php

namespace Moonspot\Kubernetes\Objects;

class LocalVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * fsType is the filesystem type to mount. It applies only when the Path is
     * a block device. Must be a filesystem type supported by the host
     * operating system. Ex. "ext4", "xfs", "ntfs". The default value is to
     * auto-select a filesystem if unspecified.
     */
    public ?string $fsType = null;

    /**
     * path of the full path to the volume on the node. It can be either a
     * directory or block device (disk, partition, ...).
     */
    public string $path;
}
