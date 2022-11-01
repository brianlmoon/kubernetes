<?php

namespace Moonspot\Kubernetes\Objects;

class PodsMetricSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * metric identifies the target metric by name and selector
     */
    public MetricIdentifier $metric;

    /**
     * target specifies the target value for the given metric
     */
    public MetricTarget $target;

    public function __construct() {
        $this->metric = new MetricIdentifier();
        $this->target = new MetricTarget();
    }
}
