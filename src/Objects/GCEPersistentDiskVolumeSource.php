<?php

namespace Moonspot\Kubernetes\Objects;

class GCEPersistentDiskVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * fsType is filesystem type of the volume that you want to mount. Tip:
     * Ensure that the filesystem type is supported by the host operating
     * system. Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be
     * "ext4" if unspecified. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#gcepersistentdisk
     */
    public ?string $fsType = null;

    /**
     * partition is the partition in the volume that you want to mount. If
     * omitted, the default is to mount by volume name. Examples: For volume
     * /dev/sda1, you specify the partition as "1". Similarly, the volume
     * partition for /dev/sda is "0" (or you can leave the property empty).
     * More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#gcepersistentdisk
     */
    public ?int $partition = null;

    /**
     * pdName is unique name of the PD resource in GCE. Used to identify the
     * disk in GCE. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#gcepersistentdisk
     */
    public string $pdName;

    /**
     * readOnly here will force the ReadOnly setting in VolumeMounts. Defaults
     * to false. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#gcepersistentdisk
     */
    public ?bool $readOnly = null;
}
