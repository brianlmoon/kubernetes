<?php

namespace Moonspot\Kubernetes\Objects;

class SleepAction extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Seconds is the number of seconds to sleep.
     */
    public int $seconds;
}
