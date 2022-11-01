<?php

namespace Moonspot\Kubernetes\Objects;

class ResourceMetricStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * current contains the current value for the given metric
     */
    public MetricValueStatus $current;

    /**
     * Name is the name of the resource in question.
     */
    public string $name;

    public function __construct() {
        $this->current = new MetricValueStatus();
    }
}
