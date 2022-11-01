<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class HostAlias extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Hostnames for the above IP address.
     */
    public ?StringSet $hostnames = null;

    /**
     * IP address of the host file entry.
     */
    public ?string $ip = null;

    public function __construct() {
        $this->hostnames = new StringSet();
    }
}
