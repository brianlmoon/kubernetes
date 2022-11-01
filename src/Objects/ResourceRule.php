<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class ResourceRule extends \Moonspot\Kubernetes\BaseObject {

    /**
     * APIGroups is the name of the APIGroup that contains the resources.  If
     * multiple API groups are specified, any action requested against one of
     * the enumerated resources in any API group will be allowed.  "*" means
     * all.
     */
    public ?StringSet $apiGroups = null;

    /**
     * ResourceNames is an optional white list of names that the rule applies
     * to.  An empty set means that everything is allowed.  "*" means all.
     */
    public ?StringSet $resourceNames = null;

    //
    // Resources is a list of resources this rule applies to.  "*" means all in
    // the specified apiGroups.
    //  "*/foo" represents the subresource 'foo' for all resources in the
    // specified apiGroups.
    //
    public ?StringSet $resources = null;

    /**
     * Verb is a list of kubernetes resource API verbs, like: get, list, watch,
     * create, update, delete, proxy.  "*" means all.
     */
    public StringSet $verbs;

    public function __construct() {
        $this->apiGroups = new StringSet();
        $this->resourceNames = new StringSet();
        $this->resources = new StringSet();
        $this->verbs = new StringSet();
    }
}
