<?php

namespace Moonspot\Kubernetes\Objects;

class NFSVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * path that is exported by the NFS server. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     */
    public string $path;

    /**
     * readOnly here will force the NFS export to be mounted with read-only
     * permissions. Defaults to false. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     */
    public ?bool $readOnly = null;

    /**
     * server is the hostname or IP address of the NFS server. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#nfs
     */
    public string $server;
}
