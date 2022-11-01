<?php

namespace Moonspot\Kubernetes\Objects;

class MetricTarget extends \Moonspot\Kubernetes\BaseObject {

    /**
     * averageUtilization is the target value of the average of the resource
     * metric across all relevant pods, represented as a percentage of the
     * requested value of the resource for the pods. Currently only valid for
     * Resource metric source type
     */
    public ?int $averageUtilization = null;

    /**
     * averageValue is the target value of the average of the metric across all
     * relevant pods (as a quantity)
     */
    public ?Quantity $averageValue = null;

    /**
     * type represents whether the metric type is Utilization, Value, or
     * AverageValue
     */
    public string $type;

    /**
     * value is the target value of the metric (as a quantity).
     */
    public ?Quantity $value = null;

    public function __construct() {
        $this->averageValue = new Quantity();
        $this->value = new Quantity();
    }
}
