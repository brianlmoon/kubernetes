<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class Endpoint extends \Moonspot\Kubernetes\BaseObject {

    /**
     * addresses of this endpoint. The contents of this field are interpreted
     * according to the corresponding EndpointSlice addressType field.
     * Consumers must handle different types of addresses in the context of
     * their own capabilities. This must contain at least one address but no
     * more than 100. These are all assumed to be fungible and clients may
     * choose to only use the first element. Refer to:
     * https://issue.k8s.io/106267
     */
    public StringSet $addresses;

    /**
     * conditions contains information about the current status of the
     * endpoint.
     */
    public ?EndpointConditions $conditions = null;

    /**
     * deprecatedTopology contains topology information part of the v1beta1
     * API. This field is deprecated, and will be removed when the v1beta1 API
     * is removed (no sooner than kubernetes v1.24).  While this field can hold
     * values, it is not writable through the v1 API, and any attempts to write
     * to it will be silently ignored. Topology information can be found in the
     * zone and nodeName fields instead.
     */
    public ?array $deprecatedTopology = null;

    /**
     * hints contains information associated with how an endpoint should be
     * consumed.
     */
    public ?EndpointHints $hints = null;

    /**
     * hostname of this endpoint. This field may be used by consumers of
     * endpoints to distinguish endpoints from each other (e.g. in DNS names).
     * Multiple endpoints which use the same hostname should be considered
     * fungible (e.g. multiple A values in DNS). Must be lowercase and pass DNS
     * Label (RFC 1123) validation.
     */
    public ?string $hostname = null;

    /**
     * nodeName represents the name of the Node hosting this endpoint. This can
     * be used to determine endpoints local to a Node.
     */
    public ?string $nodeName = null;

    /**
     * targetRef is a reference to a Kubernetes object that represents this
     * endpoint.
     */
    public ?ObjectReference $targetRef = null;

    /**
     * zone is the name of the Zone this endpoint exists in.
     */
    public ?string $zone = null;

    public function __construct() {
        $this->addresses = new StringSet();
        $this->conditions = new EndpointConditions();
        $this->hints = new EndpointHints();
        $this->targetRef = new ObjectReference();
    }
}
