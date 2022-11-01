<?php

namespace Moonspot\Kubernetes\Objects;

class AttachedVolume extends \Moonspot\Kubernetes\BaseObject {

    /**
     * DevicePath represents the device path where the volume should be
     * available
     */
    public string $devicePath;

    /**
     * Name of the attached volume
     */
    public string $name;
}
