<?php

namespace Moonspot\Kubernetes\Objects;

class AllowedHostPath extends \Moonspot\Kubernetes\BaseObject {

    /**
     * pathPrefix is the path prefix that the host volume must match. It does
     * not support `*`. Trailing slashes are trimmed when validating the path
     * prefix with a host path.
     * 
     * Examples: `/foo` would allow `/foo`, `/foo/` and `/foo/bar` `/foo` would
     * not allow `/food` or `/etc/foo`
     */
    public ?string $pathPrefix = null;

    /**
     * when set to true, will allow host volumes matching the pathPrefix only
     * if all volume mounts are readOnly.
     */
    public ?bool $readOnly = null;
}
