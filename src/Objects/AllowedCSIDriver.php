<?php

namespace Moonspot\Kubernetes\Objects;

class AllowedCSIDriver extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name is the registered name of the CSI driver
     */
    public string $name;
}
