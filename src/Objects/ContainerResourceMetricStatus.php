<?php

namespace Moonspot\Kubernetes\Objects;

class ContainerResourceMetricStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * container is the name of the container in the pods of the scaling target
     */
    public string $container;

    /**
     * current contains the current value for the given metric
     */
    public MetricValueStatus $current;

    /**
     * name is the name of the resource in question.
     */
    public string $name;

    public function __construct() {
        $this->current = new MetricValueStatus();
    }
}
