<?php

namespace Moonspot\Kubernetes\Objects;

class VolumeMount extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Path within the container at which the volume should be mounted.  Must
     * not contain ':'.
     */
    public string $mountPath;

    /**
     * mountPropagation determines how mounts are propagated from the host to
     * container and the other way around. When not set, MountPropagationNone
     * is used. This field is beta in 1.10.
     */
    public ?string $mountPropagation = null;

    /**
     * This must match the Name of a Volume.
     */
    public string $name;

    /**
     * Mounted read-only if true, read-write otherwise (false or unspecified).
     * Defaults to false.
     */
    public ?bool $readOnly = null;

    /**
     * Path within the volume from which the container's volume should be
     * mounted. Defaults to "" (volume's root).
     */
    public ?string $subPath = null;

    /**
     * Expanded path within the volume from which the container's volume should
     * be mounted. Behaves similarly to SubPath but environment variable
     * references $(VAR_NAME) are expanded using the container's environment.
     * Defaults to "" (volume's root). SubPathExpr and SubPath are mutually
     * exclusive.
     */
    public ?string $subPathExpr = null;
}
