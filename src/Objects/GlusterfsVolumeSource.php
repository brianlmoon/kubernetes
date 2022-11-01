<?php

namespace Moonspot\Kubernetes\Objects;

class GlusterfsVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * EndpointsName is the endpoint name that details Glusterfs topology. More
     * info: https://examples.k8s.io/volumes/glusterfs/README.md#create-a-pod
     */
    public string $endpoints;

    /**
     * Path is the Glusterfs volume path. More info:
     * https://examples.k8s.io/volumes/glusterfs/README.md#create-a-pod
     */
    public string $path;

    /**
     * ReadOnly here will force the Glusterfs volume to be mounted with
     * read-only permissions. Defaults to false. More info:
     * https://examples.k8s.io/volumes/glusterfs/README.md#create-a-pod
     */
    public ?bool $readOnly = null;
}
