<?php

namespace Moonspot\Kubernetes\Objects;

class RuntimeClass extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'RuntimeClass';

    public const VERSION = 'node.k8s.io/v1beta1';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * Handler specifies the underlying runtime and configuration that the CRI
     * implementation will use to handle pods of this class. The possible
     * values are specific to the node & CRI configuration.  It is assumed that
     * all handlers are available on every node, and handlers of the same name
     * are equivalent on every node. For example, a handler called "runc" might
     * specify that the runc OCI runtime (using native Linux containers) will
     * be used to run the containers in a pod. The Handler must be lowercase,
     * conform to the DNS Label (RFC 1123) requirements, and is immutable.
     */
    public string $handler;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Overhead represents the resource overhead associated with running a pod
     * for a given RuntimeClass. For more details, see
     * https://git.k8s.io/enhancements/keps/sig-node/688-pod-overhead/README.md
     * This field is beta-level as of Kubernetes v1.18, and is only honored by
     * servers that enable the PodOverhead feature.
     */
    public ?Overhead $overhead = null;

    /**
     * Scheduling holds the scheduling constraints to ensure that pods running
     * with this RuntimeClass are scheduled to nodes that support it. If
     * scheduling is nil, this RuntimeClass is assumed to be supported by all
     * nodes.
     */
    public ?Scheduling $scheduling = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->overhead = new Overhead();
        $this->scheduling = new Scheduling();
    }
}
