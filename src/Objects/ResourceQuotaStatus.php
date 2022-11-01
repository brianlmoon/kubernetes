<?php

namespace Moonspot\Kubernetes\Objects;

class ResourceQuotaStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Hard is the set of enforced hard limits for each named resource. More
     * info: https://kubernetes.io/docs/concepts/policy/resource-quotas/
     */
    public ?array $hard = null;

    /**
     * Used is the current observed total usage of the resource in the
     * namespace.
     */
    public ?array $used = null;
}
