<?php

namespace Moonspot\Kubernetes\Objects;

class AllowedFlexVolume extends \Moonspot\Kubernetes\BaseObject {

    /**
     * driver is the name of the Flexvolume driver.
     */
    public string $driver;
}
