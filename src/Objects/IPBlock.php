<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class IPBlock extends \Moonspot\Kubernetes\BaseObject {

    /**
     * CIDR is a string representing the IP Block Valid examples are
     * "192.168.1.0/24" or "2001:db8::/64"
     */
    public string $cidr;

    /**
     * Except is a slice of CIDRs that should not be included within an IP
     * Block Valid examples are "192.168.1.0/24" or "2001:db8::/64" Except
     * values will be rejected if they are outside the CIDR range
     */
    public ?StringSet $except = null;

    public function __construct() {
        $this->except = new StringSet();
    }
}
