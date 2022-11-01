<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class ResourcePolicyRule extends \Moonspot\Kubernetes\BaseObject {

    /**
     * `apiGroups` is a list of matching API groups and may not be empty. "*"
     * matches all API groups and, if present, must be the only entry.
     * Required.
     */
    public StringSet $apiGroups;

    /**
     * `clusterScope` indicates whether to match requests that do not specify a
     * namespace (which happens either because the resource is not namespaced
     * or the request targets all namespaces). If this field is omitted or
     * false then the `namespaces` field must contain a non-empty list.
     */
    public ?bool $clusterScope = null;

    /**
     * `namespaces` is a list of target namespaces that restricts matches.  A
     * request that specifies a target namespace matches only if either (a)
     * this list contains that target namespace or (b) this list contains "*". 
     * Note that "*" matches any specified namespace but does not match a
     * request that _does not specify_ a namespace (see the `clusterScope`
     * field for that). This list may be empty, but only if `clusterScope` is
     * true.
     */
    public ?StringSet $namespaces = null;

    /**
     * `resources` is a list of matching resources (i.e., lowercase and plural)
     * with, if desired, subresource.  For example, [ "services",
     * "nodes/status" ].  This list may not be empty. "*" matches all resources
     * and, if present, must be the only entry. Required.
     */
    public StringSet $resources;

    /**
     * `verbs` is a list of matching verbs and may not be empty. "*" matches
     * all verbs and, if present, must be the only entry. Required.
     */
    public StringSet $verbs;

    public function __construct() {
        $this->apiGroups = new StringSet();
        $this->namespaces = new StringSet();
        $this->resources = new StringSet();
        $this->verbs = new StringSet();
    }
}
