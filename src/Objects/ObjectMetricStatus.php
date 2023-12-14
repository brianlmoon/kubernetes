<?php

namespace Moonspot\Kubernetes\Objects;

class ObjectMetricStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * current contains the current value for the given metric
     */
    public MetricValueStatus $current;

    /**
     * DescribedObject specifies the descriptions of a object,such as kind,name
     * apiVersion
     */
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
