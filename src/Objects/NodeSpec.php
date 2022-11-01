<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;
use Moonspot\Kubernetes\Objects\Sets\TaintSet;

class NodeSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * If specified, the source to get node configuration from The
     * DynamicKubeletConfig feature gate must be enabled for the Kubelet to use
     * this field
     */
    public ?NodeConfigSource $configSource = null;

    /**
     * Deprecated. Not all kubelets will set this field. Remove field after
     * 1.13. see: https://issues.k8s.io/61966
     */
    public ?string $externalID = null;

    /**
     * PodCIDR represents the pod IP range assigned to the node.
     */
    public ?string $podCIDR = null;

    /**
     * podCIDRs represents the IP ranges assigned to the node for usage by Pods
     * on that node. If this field is specified, the 0th entry must match the
     * podCIDR field. It may contain at most 1 value for each of IPv4 and IPv6.
     */
    public ?StringSet $podCIDRs = null;

    /**
     * ID of the node assigned by the cloud provider in the format:
     * <ProviderName>://<ProviderSpecificNodeID>
     */
    public ?string $providerID = null;

    /**
     * If specified, the node's taints.
     */
    public ?TaintSet $taints = null;

    /**
     * Unschedulable controls node schedulability of new pods. By default, node
     * is schedulable. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#manual-node-administration
     */
    public ?bool $unschedulable = null;

    public function __construct() {
        $this->configSource = new NodeConfigSource();
        $this->podCIDRs = new StringSet();
        $this->taints = new TaintSet();
    }
}
