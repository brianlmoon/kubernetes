<?php

namespace Moonspot\Kubernetes\Objects;

class MetricValueStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * currentAverageUtilization is the current value of the average of the
     * resource metric across all relevant pods, represented as a percentage of
     * the requested value of the resource for the pods.
     */
    public ?int $averageUtilization = null;

    /**
     * averageValue is the current value of the average of the metric across
     * all relevant pods (as a quantity)
     */
    public ?Quantity $averageValue = null;

    /**
     * value is the current value of the metric (as a quantity).
     */
    public ?Quantity $value = null;

    public function __construct() {
        $this->averageValue = new Quantity();
        $this->value = new Quantity();
    }
}
