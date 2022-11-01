<?php

namespace Moonspot\Kubernetes\Objects;

class LimitRangeItem extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Default resource requirement limit value by resource name if resource
     * limit is omitted.
     */
    public ?array $default = null;

    /**
     * DefaultRequest is the default resource requirement request value by
     * resource name if resource request is omitted.
     */
    public ?array $defaultRequest = null;

    /**
     * Max usage constraints on this kind by resource name.
     */
    public ?array $max = null;

    /**
     * MaxLimitRequestRatio if specified, the named resource must have a
     * request and limit that are both non-zero where limit divided by request
     * is less than or equal to the enumerated value; this represents the max
     * burst for the named resource.
     */
    public ?array $maxLimitRequestRatio = null;

    /**
     * Min usage constraints on this kind by resource name.
     */
    public ?array $min = null;

    /**
     * Type of resource that this limit applies to.
     * 
     * Possible enum values:
     *  - `"Container"` Limit that applies to all containers in a namespace
     *  - `"PersistentVolumeClaim"` Limit that applies to all persistent volume
     * claims in a namespace
     *  - `"Pod"` Limit that applies to all pods in a namespace
     */
    public string $type;
}
