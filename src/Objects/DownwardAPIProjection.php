<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\DownwardAPIVolumeFileSet;

class DownwardAPIProjection extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Items is a list of DownwardAPIVolume file
     */
    public ?DownwardAPIVolumeFileSet $items = null;

    public function __construct() {
        $this->items = new DownwardAPIVolumeFileSet();
    }
}
