<?php

namespace Moonspot\Kubernetes\Objects;

class QuobyteVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * group to map volume access to Default is no group
     */
    public ?string $group = null;

    /**
     * readOnly here will force the Quobyte volume to be mounted with read-only
     * permissions. Defaults to false.
     */
    public ?bool $readOnly = null;

    /**
     * registry represents a single or multiple Quobyte Registry services
     * specified as a string as host:port pair (multiple entries are separated
     * with commas) which acts as the central registry for volumes
     */
    public string $registry;

    /**
     * tenant owning the given Quobyte volume in the Backend Used with
     * dynamically provisioned Quobyte volumes, value is set by the plugin
     */
    public ?string $tenant = null;

    /**
     * user to map volume access to Defaults to serivceaccount user
     */
    public ?string $user = null;

    /**
     * volume is a string that references an already created Quobyte volume by
     * name.
     */
    public string $volume;
}
