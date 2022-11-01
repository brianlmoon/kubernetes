<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class PodAffinityTerm extends \Moonspot\Kubernetes\BaseObject {

    /**
     * A label query over a set of resources, in this case pods.
     */
    public ?LabelSelector $labelSelector = null;

    /**
     * A label query over the set of namespaces that the term applies to. The
     * term is applied to the union of the namespaces selected by this field
     * and the ones listed in the namespaces field. null selector and null or
     * empty namespaces list means "this pod's namespace". An empty selector
     * ({}) matches all namespaces. This field is alpha-level and is only
     * honored when PodAffinityNamespaceSelector feature is enabled.
     */
    public ?LabelSelector $namespaceSelector = null;

    /**
     * namespaces specifies a static list of namespace names that the term
     * applies to. The term is applied to the union of the namespaces listed in
     * this field and the ones selected by namespaceSelector. null or empty
     * namespaces list and null namespaceSelector means "this pod's namespace"
     */
    public ?StringSet $namespaces = null;

    /**
     * This pod should be co-located (affinity) or not co-located
     * (anti-affinity) with the pods matching the labelSelector in the
     * specified namespaces, where co-located is defined as running on a node
     * whose value of the label with key topologyKey matches that of any node
     * on which any of the selected pods is running. Empty topologyKey is not
     * allowed.
     */
    public string $topologyKey;

    public function __construct() {
        $this->labelSelector = new LabelSelector();
        $this->namespaceSelector = new LabelSelector();
        $this->namespaces = new StringSet();
    }
}
