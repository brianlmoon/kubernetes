<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\NodeAddressSet;
use Moonspot\Kubernetes\Objects\Sets\NodeConditionSet;
use Moonspot\Kubernetes\Objects\Sets\ContainerImageSet;
use Moonspot\Kubernetes\Objects\Sets\AttachedVolumeSet;
use Moonspot\Kubernetes\Objects\Sets\StringSet;

class NodeStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * List of addresses reachable to the node. Queried from cloud provider, if
     * available. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#addresses Note: This
     * field is declared as mergeable, but the merge key is not sufficiently
     * unique, which can cause data corruption when it is merged. Callers
     * should instead use a full-replacement patch. See http://pr.k8s.io/79391
     * for an example.
     */
    public ?NodeAddressSet $addresses = null;

    /**
     * Allocatable represents the resources of a node that are available for
     * scheduling. Defaults to Capacity.
     */
    public ?array $allocatable = null;

    /**
     * Capacity represents the total resources of a node. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#capacity
     */
    public ?array $capacity = null;

    /**
     * Conditions is an array of current observed node conditions. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#condition
     */
    public ?NodeConditionSet $conditions = null;

    /**
     * Status of the config assigned to the node via the dynamic Kubelet config
     * feature.
     */
    public ?NodeConfigStatus $config = null;

    /**
     * Endpoints of daemons running on the Node.
     */
    public ?NodeDaemonEndpoints $daemonEndpoints = null;

    /**
     * List of container images on this node
     */
    public ?ContainerImageSet $images = null;

    /**
     * Set of ids/uuids to uniquely identify the node. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#info
     */
    public ?NodeSystemInfo $nodeInfo = null;

    /**
     * NodePhase is the recently observed lifecycle phase of the node. More
     * info: https://kubernetes.io/docs/concepts/nodes/node/#phase The field is
     * never populated, and now is deprecated.
     */
    public ?string $phase = null;

    /**
     * List of volumes that are attached to the node.
     */
    public ?AttachedVolumeSet $volumesAttached = null;

    /**
     * List of attachable volumes in use (mounted) by the node.
     */
    public ?StringSet $volumesInUse = null;

    public function __construct() {
        $this->addresses = new NodeAddressSet();
        $this->conditions = new NodeConditionSet();
        $this->config = new NodeConfigStatus();
        $this->daemonEndpoints = new NodeDaemonEndpoints();
        $this->images = new ContainerImageSet();
        $this->nodeInfo = new NodeSystemInfo();
        $this->volumesAttached = new AttachedVolumeSet();
        $this->volumesInUse = new StringSet();
    }
}
