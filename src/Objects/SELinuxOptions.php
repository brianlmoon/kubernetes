<?php

namespace Moonspot\Kubernetes\Objects;

class SELinuxOptions extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Level is SELinux level label that applies to the container.
     */
    public ?string $level = null;

    /**
     * Role is a SELinux role label that applies to the container.
     */
    public ?string $role = null;

    /**
     * Type is a SELinux type label that applies to the container.
     */
    public ?string $type = null;

    /**
     * User is a SELinux user label that applies to the container.
     */
    public ?string $user = null;
}
