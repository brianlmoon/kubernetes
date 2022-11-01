<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\CSINodeDriverSet;

class CSINodeSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * drivers is a list of information of all CSI Drivers existing on a node.
     * If all drivers in the list are uninstalled, this can become empty.
     */
    public CSINodeDriverSet $drivers;

    public function __construct() {
        $this->drivers = new CSINodeDriverSet();
    }
}
