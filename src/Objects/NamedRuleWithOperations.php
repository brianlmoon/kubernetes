<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class NamedRuleWithOperations extends \Moonspot\Kubernetes\BaseObject {

    /**
     * APIGroups is the API groups the resources belong to. '*' is all groups.
     * If '*' is present, the length of the slice must be one. Required.
     */
    public ?StringSet $apiGroups = null;

    /**
     * APIVersions is the API versions the resources belong to. '*' is all
     * versions. If '*' is present, the length of the slice must be one.
     * Required.
     */
    public ?StringSet $apiVersions = null;

    /**
     * Operations is the operations the admission hook cares about - CREATE,
     * UPDATE, DELETE, CONNECT or * for all of those operations and any future
     * admission operations that are added. If '*' is present, the length of
     * the slice must be one. Required.
     */
    public ?StringSet $operations = null;

    /**
     * ResourceNames is an optional white list of names that the rule applies
     * to.  An empty set means that everything is allowed.
     */
    public ?StringSet $resourceNames = null;

    //
    // Resources is a list of resources this rule applies to.
    // 
    // For example: 'pods' means pods. 'pods/log' means the log subresource of
    // pods. '*' means all resources, but not subresources. 'pods/*' means all
    // subresources of pods. '*/scale' means all scale subresources. '*/*'
    // means all resources and their subresources.
    // 
    // If wildcard is present, the validation rule will ensure resources do not
    // overlap with each other.
    // 
    // Depending on the enclosing object, subresources might not be allowed.
    // Required.
    //
    public ?StringSet $resources = null;

    /**
     * scope specifies the scope of this rule. Valid values are "Cluster",
     * "Namespaced", and "*" "Cluster" means that only cluster-scoped resources
     * will match this rule. Namespace API objects are cluster-scoped.
     * "Namespaced" means that only namespaced resources will match this rule.
     * "*" means that there are no scope restrictions. Subresources match the
     * scope of their parent resource. Default is "*".
     */
    public ?string $scope = null;

    public function __construct() {
        $this->apiGroups = new StringSet();
        $this->apiVersions = new StringSet();
        $this->operations = new StringSet();
        $this->resourceNames = new StringSet();
        $this->resources = new StringSet();
    }
}
