<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;
use Moonspot\Kubernetes\Objects\Sets\PodDNSConfigOptionSet;

class PodDNSConfig extends \Moonspot\Kubernetes\BaseObject {

    /**
     * A list of DNS name server IP addresses. This will be appended to the
     * base nameservers generated from DNSPolicy. Duplicated nameservers will
     * be removed.
     */
    public ?StringSet $nameservers = null;

    /**
     * A list of DNS resolver options. This will be merged with the base
     * options generated from DNSPolicy. Duplicated entries will be removed.
     * Resolution options given in Options will override those that appear in
     * the base DNSPolicy.
     */
    public ?PodDNSConfigOptionSet $options = null;

    /**
     * A list of DNS search domains for host-name lookup. This will be appended
     * to the base search paths generated from DNSPolicy. Duplicated search
     * paths will be removed.
     */
    public ?StringSet $searches = null;

    public function __construct() {
        $this->nameservers = new StringSet();
        $this->options = new PodDNSConfigOptionSet();
        $this->searches = new StringSet();
    }
}
