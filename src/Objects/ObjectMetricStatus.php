<?php

namespace Moonspot\Kubernetes\Objects;

class ObjectMetricStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * current contains the current value for the given metric
     */
    public MetricValueStatus $current;


    public CrossVersionObjectReference $describedObject;

    /**
     * metric identifies the target metric by name and selector
     */
    public MetricIdentifier $metric;

    public function __construct() {
        $this->current = new MetricValueStatus();
        $this->describedObject = new CrossVersionObjectReference();
        $this->metric = new MetricIdentifier();
    }
}
