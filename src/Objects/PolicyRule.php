<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class PolicyRule extends \Moonspot\Kubernetes\BaseObject {

    /**
     * APIGroups is the name of the APIGroup that contains the resources.  If
     * multiple API groups are specified, any action requested against one of
     * the enumerated resources in any API group will be allowed.
     */
    public ?StringSet $apiGroups = null;

    /**
     * NonResourceURLs is a set of partial urls that a user should have access
     * to.  *s are allowed, but only as the full, final step in the path Since
     * non-resource URLs are not namespaced, this field is only applicable for
     * ClusterRoles referenced from a ClusterRoleBinding. Rules can either
     * apply to API resources (such as "pods" or "secrets") or non-resource URL
     * paths (such as "/api"),  but not both.
     */
    public ?StringSet $nonResourceURLs = null;

    /**
     * ResourceNames is an optional white list of names that the rule applies
     * to.  An empty set means that everything is allowed.
     */
    public ?StringSet $resourceNames = null;

    /**
     * Resources is a list of resources this rule applies to. '*' represents
     * all resources.
     */
    public ?StringSet $resources = null;

    /**
     * Verbs is a list of Verbs that apply to ALL the ResourceKinds and
     * AttributeRestrictions contained in this rule. '*' represents all verbs.
     */
    public StringSet $verbs;

    public function __construct() {
        $this->apiGroups = new StringSet();
        $this->nonResourceURLs = new StringSet();
        $this->resourceNames = new StringSet();
        $this->resources = new StringSet();
        $this->verbs = new StringSet();
    }
}
