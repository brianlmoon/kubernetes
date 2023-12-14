<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class ServiceCIDRSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * CIDRs defines the IP blocks in CIDR notation (e.g. "192.168.0.0/24" or
     * "2001:db8::/64") from which to assign service cluster IPs. Max of two
     * CIDRs is allowed, one of each IP family. This field is immutable.
     */
    public ?StringSet $cidrs = null;

    public function __construct() {
        $this->cidrs = new StringSet();
    }
}
