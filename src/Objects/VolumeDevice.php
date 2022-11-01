<?php

namespace Moonspot\Kubernetes\Objects;

class VolumeDevice extends \Moonspot\Kubernetes\BaseObject {

    /**
     * devicePath is the path inside of the container that the device will be
     * mapped to.
     */
    public string $devicePath;

    /**
     * name must match the name of a persistentVolumeClaim in the pod
     */
    public string $name;
}
