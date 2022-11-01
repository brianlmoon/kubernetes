<?php

namespace Moonspot\Kubernetes\Objects;

class ObjectMetricSource extends \Moonspot\Kubernetes\BaseObject {


    public CrossVersionObjectReference $describedObject;

    /**
     * metric identifies the target metric by name and selector
     */
    public MetricIdentifier $metric;

    /**
     * target specifies the target value for the given metric
     */
    public MetricTarget $target;

    public function __construct() {
        $this->describedObject = new CrossVersionObjectReference();
        $this->metric = new MetricIdentifier();
        $this->target = new MetricTarget();
    }
}
