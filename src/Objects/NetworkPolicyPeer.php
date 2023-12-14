<?php

namespace Moonspot\Kubernetes\Objects;

class NetworkPolicyPeer extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ipBlock defines policy on a particular IPBlock. If this field is set
     * then neither of the other fields can be.
     */
    public ?IPBlock $ipBlock = null;

    /**
     * namespaceSelector selects namespaces using cluster-scoped labels. This
     * field follows standard label selector semantics; if present but empty,
     * it selects all namespaces.
     * 
     * If podSelector is also set, then the NetworkPolicyPeer as a whole
     * selects the pods matching podSelector in the namespaces selected by
     * namespaceSelector. Otherwise it selects all pods in the namespaces
     * selected by namespaceSelector.
     */
    public ?LabelSelector $namespaceSelector = null;

    /**
     * podSelector is a label selector which selects pods. This field follows
     * standard label selector semantics; if present but empty, it selects all
     * pods.
     * 
     * If namespaceSelector is also set, then the NetworkPolicyPeer as a whole
     * selects the pods matching podSelector in the Namespaces selected by
     * NamespaceSelector. Otherwise it selects the pods matching podSelector in
     * the policy's own namespace.
     */
    public ?LabelSelector $podSelector = null;

    public function __construct() {
        $this->ipBlock = new IPBlock();
        $this->namespaceSelector = new LabelSelector();
        $this->podSelector = new LabelSelector();
    }
}
