<?php

namespace Moonspot\Kubernetes\Objects;

class ResourceMetricSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * name is the name of the resource in question.
     */
    public string $name;

    /**
     * target specifies the target value for the given metric
     */
    public MetricTarget $target;

    public function __construct() {
        $this->target = new MetricTarget();
    }
}
