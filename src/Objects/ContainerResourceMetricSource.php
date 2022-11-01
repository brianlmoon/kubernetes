<?php

namespace Moonspot\Kubernetes\Objects;

class ContainerResourceMetricSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * container is the name of the container in the pods of the scaling target
     */
    public string $container;

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
