<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\VolumeProjectionSet;

class ProjectedVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Mode bits used to set permissions on created files by default. Must be
     * an octal value between 0000 and 0777 or a decimal value between 0 and
     * 511. YAML accepts both octal and decimal values, JSON requires decimal
     * values for mode bits. Directories within the path are not affected by
     * this setting. This might be in conflict with other options that affect
     * the file mode, like fsGroup, and the result can be other mode bits set.
     */
    public ?int $defaultMode = null;

    /**
     * list of volume projections
     */
    public ?VolumeProjectionSet $sources = null;

    public function __construct() {
        $this->sources = new VolumeProjectionSet();
    }
}
