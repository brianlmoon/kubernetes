<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class ResourceQuotaSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * hard is the set of desired hard limits for each named resource. More
     * info: https://kubernetes.io/docs/concepts/policy/resource-quotas/
     */
    public ?array $hard = null;

    /**
     * scopeSelector is also a collection of filters like scopes that must
     * match each object tracked by a quota but expressed using
     * ScopeSelectorOperator in combination with possible values. For a
     * resource to match, both scopes AND scopeSelector (if specified in spec),
     * must be matched.
     */
    public ?ScopeSelector $scopeSelector = null;

    /**
     * A collection of filters that must match each object tracked by a quota.
     * If not specified, the quota matches all objects.
     */
    public ?StringSet $scopes = null;

    public function __construct() {
        $this->scopeSelector = new ScopeSelector();
        $this->scopes = new StringSet();
    }
}
