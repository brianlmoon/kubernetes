<?php

namespace Moonspot\Kubernetes\Objects;

class NetworkPolicyPeer extends \Moonspot\Kubernetes\BaseObject {

    /**
     * IPBlock defines policy on a particular IPBlock. If this field is set
     * then neither of the other fields can be.
     */
    public ?IPBlock $ipBlock = null;

    /**
     * Selects Namespaces using cluster-scoped labels. This field follows
     * standard label selector semantics; if present but empty, it selects all
     * namespaces.
     * 
     * If PodSelector is also set, then the NetworkPolicyPeer as a whole
     * selects the Pods matching PodSelector in the Namespaces selected by
     * NamespaceSelector. Otherwise it selects all Pods in the Namespaces
     * selected by NamespaceSelector.
     */
    public ?LabelSelector $namespaceSelector = null;

    /**
     * This is a label selector which selects Pods. This field follows standard
     * label selector semantics; if present but empty, it selects all pods.
     * 
     * If NamespaceSelector is also set, then the NetworkPolicyPeer as a whole
     * selects the Pods matching PodSelector in the Namespaces selected by
     * NamespaceSelector. Otherwise it selects the Pods matching PodSelector in
     * the policy's own Namespace.
     */
    public ?LabelSelector $podSelector = null;

    public function __construct() {
        $this->ipBlock = new IPBlock();
        $this->namespaceSelector = new LabelSelector();
        $this->podSelector = new LabelSelector();
    }
}
