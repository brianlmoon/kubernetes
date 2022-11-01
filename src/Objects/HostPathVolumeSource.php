<?php

namespace Moonspot\Kubernetes\Objects;

class HostPathVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * path of the directory on the host. If the path is a symlink, it will
     * follow the link to the real path. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     */
    public string $path;

    /**
     * type for HostPath Volume Defaults to "" More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     */
    public ?string $type = null;
}
