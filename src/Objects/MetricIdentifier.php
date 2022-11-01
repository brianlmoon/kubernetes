<?php

namespace Moonspot\Kubernetes\Objects;

class MetricIdentifier extends \Moonspot\Kubernetes\BaseObject {

    /**
     * name is the name of the given metric
     */
    public string $name;

    /**
     * selector is the string-encoded form of a standard kubernetes label
     * selector for the given metric When set, it is passed as an additional
     * parameter to the metrics server for more specific metrics scoping. When
     * unset, just the metricName will be used to gather metrics.
     */
    public ?LabelSelector $selector = null;

    public function __construct() {
        $this->selector = new LabelSelector();
    }
}
