<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\HorizontalPodAutoscalerConditionSet;
use Moonspot\Kubernetes\Objects\Sets\MetricStatusSet;

class HorizontalPodAutoscalerStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * conditions is the set of conditions required for this autoscaler to
     * scale its target, and indicates whether or not those conditions are met.
     */
    public HorizontalPodAutoscalerConditionSet $conditions;

    /**
     * currentMetrics is the last read state of the metrics used by this
     * autoscaler.
     */
    public ?MetricStatusSet $currentMetrics = null;

    /**
     * currentReplicas is current number of replicas of pods managed by this
     * autoscaler, as last seen by the autoscaler.
     */
    public int $currentReplicas;

    /**
     * desiredReplicas is the desired number of replicas of pods managed by
     * this autoscaler, as last calculated by the autoscaler.
     */
    public int $desiredReplicas;

    /**
     * lastScaleTime is the last time the HorizontalPodAutoscaler scaled the
     * number of pods, used by the autoscaler to control how often the number
     * of pods is changed.
     */
    public ?Time $lastScaleTime = null;

    /**
     * observedGeneration is the most recent generation observed by this
     * autoscaler.
     */
    public ?int $observedGeneration = null;

    public function __construct() {
        $this->conditions = new HorizontalPodAutoscalerConditionSet();
        $this->currentMetrics = new MetricStatusSet();
        $this->lastScaleTime = new Time();
    }
}
