<?php

namespace Moonspot\Kubernetes\Objects;

class RuntimeClassSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Overhead represents the resource overhead associated with running a pod
     * for a given RuntimeClass. For more details, see
     * https://git.k8s.io/enhancements/keps/sig-node/20190226-pod-overhead.md
     * This field is alpha-level as of Kubernetes v1.15, and is only honored by
     * servers that enable the PodOverhead feature.
     */
    public ?Overhead $overhead = null;

    /**
     * RuntimeHandler specifies the underlying runtime and configuration that
     * the CRI implementation will use to handle pods of this class. The
     * possible values are specific to the node & CRI configuration.  It is
     * assumed that all handlers are available on every node, and handlers of
     * the same name are equivalent on every node. For example, a handler
     * called "runc" might specify that the runc OCI runtime (using native
     * Linux containers) will be used to run the containers in a pod. The
     * RuntimeHandler must be lowercase, conform to the DNS Label (RFC 1123)
     * requirements, and is immutable.
     */
    public string $runtimeHandler;

    /**
     * Scheduling holds the scheduling constraints to ensure that pods running
     * with this RuntimeClass are scheduled to nodes that support it. If
     * scheduling is nil, this RuntimeClass is assumed to be supported by all
     * nodes.
     */
    public ?Scheduling $scheduling = null;

    public function __construct() {
        $this->overhead = new Overhead();
        $this->scheduling = new Scheduling();
    }
}
