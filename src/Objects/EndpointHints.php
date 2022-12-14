<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\ForZoneSet;

class EndpointHints extends \Moonspot\Kubernetes\BaseObject {

    /**
     * forZones indicates the zone(s) this endpoint should be consumed by to
     * enable topology aware routing.
     */
    public ?ForZoneSet $forZones = null;

    public function __construct() {
        $this->forZones = new ForZoneSet();
    }
}
