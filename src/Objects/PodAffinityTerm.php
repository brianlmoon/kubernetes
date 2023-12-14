<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class PodAffinityTerm extends \Moonspot\Kubernetes\BaseObject {

    /**
     * A label query over a set of resources, in this case pods. If it's null,
     * this PodAffinityTerm matches with no Pods.
     */
    public ?LabelSelector $labelSelector = null;

    /**
     * MatchLabelKeys is a set of pod label keys to select which pods will be
     * taken into consideration. The keys are used to lookup values from the
     * incoming pod labels, those key-value labels are merged with
     * `LabelSelector` as `key in (value)` to select the group of existing pods
     * which pods will be taken into consideration for the incoming pod's pod
     * (anti) affinity. Keys that don't exist in the incoming pod labels will
     * be ignored. The default value is empty. The same key is forbidden to
     * exist in both MatchLabelKeys and LabelSelector. Also, MatchLabelKeys
     * cannot be set when LabelSelector isn't set. This is an alpha field and
     * requires enabling MatchLabelKeysInPodAffinity feature gate.
     */
    public ?StringSet $matchLabelKeys = null;

    /**
     * MismatchLabelKeys is a set of pod label keys to select which pods will
     * be taken into consideration. The keys are used to lookup values from the
     * incoming pod labels, those key-value labels are merged with
     * `LabelSelector` as `key notin (value)` to select the group of existing
     * pods which pods will be taken into consideration for the incoming pod's
     * pod (anti) affinity. Keys that don't exist in the incoming pod labels
     * will be ignored. The default value is empty. The same key is forbidden
     * to exist in both MismatchLabelKeys and LabelSelector. Also,
     * MismatchLabelKeys cannot be set when LabelSelector isn't set. This is an
     * alpha field and requires enabling MatchLabelKeysInPodAffinity feature
     * gate.
     */
    public ?StringSet $mismatchLabelKeys = null;

    /**
     * A label query over the set of namespaces that the term applies to. The
     * term is applied to the union of the namespaces selected by this field
     * and the ones listed in the namespaces field. null selector and null or
     * empty namespaces list means "this pod's namespace". An empty selector
     * ({}) matches all namespaces.
     */
    public ?LabelSelector $namespaceSelector = null;

    /**
     * namespaces specifies a static list of namespace names that the term
     * applies to. The term is applied to the union of the namespaces listed in
     * this field and the ones selected by namespaceSelector. null or empty
     * namespaces list and null namespaceSelector means "this pod's namespace".
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
        $this->matchLabelKeys = new StringSet();
        $this->mismatchLabelKeys = new StringSet();
        $this->namespaceSelector = new LabelSelector();
        $this->namespaces = new StringSet();
    }
}
