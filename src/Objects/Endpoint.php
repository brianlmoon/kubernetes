<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class Endpoint extends \Moonspot\Kubernetes\BaseObject {

    /**
     * addresses of this endpoint. The contents of this field are interpreted
     * according to the corresponding EndpointSlice addressType field.
     * Consumers must handle different types of addresses in the context of
     * their own capabilities. This must contain at least one address but no
     * more than 100.
     */
    public StringSet $addresses;

    /**
     * conditions contains information about the current status of the
     * endpoint.
     */
    public ?EndpointConditions $conditions = null;

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
     * be used to determine endpoints local to a Node. This field can be
     * enabled with the EndpointSliceNodeName feature gate.
     */
    public ?string $nodeName = null;

    /**
     * targetRef is a reference to a Kubernetes object that represents this
     * endpoint.
     */
    public ?ObjectReference $targetRef = null;

    /**
     * topology contains arbitrary topology information associated with the
     * endpoint. These key/value pairs must conform with the label format.
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels
     * Topology may include a maximum of 16 key/value pairs. This includes, but
     * is not limited to the following well known keys: *
     * kubernetes.io/hostname: the value indicates the hostname of the node
     *   where the endpoint is located. This should match the corresponding
     *   node label.
     * * topology.kubernetes.io/zone: the value indicates the zone where the
     *   endpoint is located. This should match the corresponding node label.
     * * topology.kubernetes.io/region: the value indicates the region where
     * the
     *   endpoint is located. This should match the corresponding node label.
     * This field is deprecated and will be removed in future api versions.
     */
    public ?array $topology = null;

    public function __construct() {
        $this->addresses = new StringSet();
        $this->conditions = new EndpointConditions();
        $this->hints = new EndpointHints();
        $this->targetRef = new ObjectReference();
    }
}