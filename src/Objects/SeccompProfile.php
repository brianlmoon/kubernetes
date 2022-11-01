<?php

namespace Moonspot\Kubernetes\Objects;

class SeccompProfile extends \Moonspot\Kubernetes\BaseObject {

    /**
     * localhostProfile indicates a profile defined in a file on the node
     * should be used. The profile must be preconfigured on the node to work.
     * Must be a descending path, relative to the kubelet's configured seccomp
     * profile location. Must only be set if type is "Localhost".
     */
    public ?string $localhostProfile = null;

    /**
     * type indicates which kind of seccomp profile will be applied. Valid
     * options are:
     * 
     * Localhost - a profile defined in a file on the node should be used.
     * RuntimeDefault - the container runtime default profile should be used.
     * Unconfined - no profile should be applied.
     * 
     * Possible enum values:
     *  - `"Localhost"` indicates a profile defined in a file on the node
     * should be used. The file's location relative to
     * <kubelet-root-dir>/seccomp.
     *  - `"RuntimeDefault"` represents the default container runtime seccomp
     * profile.
     *  - `"Unconfined"` indicates no seccomp profile is applied (A.K.A.
     * unconfined).
     */
    public string $type;
}
