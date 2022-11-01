<?php

namespace Moonspot\Kubernetes\Objects;

class EventSeries extends \Moonspot\Kubernetes\BaseObject {

    /**
     * count is the number of occurrences in this series up to the last
     * heartbeat time.
     */
    public int $count;

    /**
     * lastObservedTime is the time when last Event from the series was seen
     * before last heartbeat.
     */
    public MicroTime $lastObservedTime;

    public function __construct() {
        $this->lastObservedTime = new MicroTime();
    }
}
