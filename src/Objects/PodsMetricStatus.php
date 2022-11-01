<?php

namespace Moonspot\Kubernetes\Objects;

class PodsMetricStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * current contains the current value for the given metric
     */
    public MetricValueStatus $current;

    /**
     * metric identifies the target metric by name and selector
     */
    public MetricIdentifier $metric;

    public function __construct() {
        $this->current = new MetricValueStatus();
        $this->metric = new MetricIdentifier();
    }
}
