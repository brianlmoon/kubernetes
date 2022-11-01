<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\EndpointSet;
use Moonspot\Kubernetes\Objects\Sets\EndpointPortSet;

class EndpointSlice extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'EndpointSlice';

    public const VERSION = 'discovery.k8s.io/v1';

    /**
     * addressType specifies the type of address carried by this EndpointSlice.
     * All addresses in this slice must be the same type. This field is
     * immutable after creation. The following address types are currently
     * supported: * IPv4: Represents an IPv4 Address. * IPv6: Represents an
     * IPv6 Address. * FQDN: Represents a Fully Qualified Domain Name.
     */
    public string $addressType;

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * endpoints is a list of unique endpoints in this slice. Each slice may
     * include a maximum of 1000 endpoints.
     */
    public EndpointSet $endpoints;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * Standard object's metadata.
     */
    public ?ObjectMeta $metadata = null;

    /**
     * ports specifies the list of network ports exposed by each endpoint in
     * this slice. Each port must have a unique name. When ports is empty, it
     * indicates that there are no defined ports. When a port is defined with a
     * nil port value, it indicates "all ports". Each slice may include a
     * maximum of 100 ports.
     */
    public ?EndpointPortSet $ports = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->endpoints = new EndpointSet();
        $this->metadata = new ObjectMeta();
        $this->ports = new EndpointPortSet();
    }
}
