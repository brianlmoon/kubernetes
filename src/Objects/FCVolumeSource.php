<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class FCVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the
     * host operating system. Ex. "ext4", "xfs", "ntfs". Implicitly inferred to
     * be "ext4" if unspecified.
     */
    public ?string $fsType = null;

    /**
     * Optional: FC target lun number
     */
    public ?int $lun = null;

    /**
     * Optional: Defaults to false (read/write). ReadOnly here will force the
     * ReadOnly setting in VolumeMounts.
     */
    public ?bool $readOnly = null;

    /**
     * Optional: FC target worldwide names (WWNs)
     */
    public ?StringSet $targetWWNs = null;

    /**
     * Optional: FC volume world wide identifiers (wwids) Either wwids or
     * combination of targetWWNs and lun must be set, but not both
     * simultaneously.
     */
    public ?StringSet $wwids = null;

    public function __construct() {
        $this->targetWWNs = new StringSet();
        $this->wwids = new StringSet();
    }
}
