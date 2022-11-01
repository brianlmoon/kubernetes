<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\ServerAddressByClientCIDRSet;
use Moonspot\Kubernetes\Objects\Sets\GroupVersionForDiscoverySet;

class APIGroup extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'APIGroup';

    public const VERSION = 'meta.apis.pkg.apimachinery.k8s.io/v1';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * name is the name of the group.
     */
    public string $name;

    /**
     * preferredVersion is the version preferred by the API server, which
     * probably is the storage version.
     */
    public ?GroupVersionForDiscovery $preferredVersion = null;

    /**
     * a map of client CIDR to server address that is serving this group. This
     * is to help clients reach servers in the most network-efficient way
     * possible. Clients can use the appropriate server address as per the CIDR
     * that they match. In case of multiple matches, clients should use the
     * longest matching CIDR. The server returns only those CIDRs that it
     * thinks that the client can match. For example: the master will return an
     * internal IP CIDR only, if the client reaches the server using an
     * internal IP. Server looks at X-Forwarded-For header or X-Real-Ip header
     * or request.RemoteAddr (in that order) to get the client IP.
     */
    public ?ServerAddressByClientCIDRSet $serverAddressByClientCIDRs = null;

    /**
     * versions are the versions supported in this group.
     */
    public GroupVersionForDiscoverySet $versions;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->preferredVersion = new GroupVersionForDiscovery();
        $this->serverAddressByClientCIDRs = new ServerAddressByClientCIDRSet();
        $this->versions = new GroupVersionForDiscoverySet();
    }
}
