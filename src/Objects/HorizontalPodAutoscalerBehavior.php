<?php

namespace Moonspot\Kubernetes\Objects;

class HorizontalPodAutoscalerBehavior extends \Moonspot\Kubernetes\BaseObject {

    /**
     * scaleDown is scaling policy for scaling Down. If not set, the default
     * value is to allow to scale down to minReplicas pods, with a 300 second
     * stabilization window (i.e., the highest recommendation for the last
     * 300sec is used).
     */
    public ?HPAScalingRules $scaleDown = null;

    /**
     * scaleUp is scaling policy for scaling Up. If not set, the default value
     * is the higher of:
     *   * increase no more than 4 pods per 60 seconds
     *   * double the number of pods per 60 seconds
     * No stabilization is used.
     */
    public ?HPAScalingRules $scaleUp = null;

    public function __construct() {
        $this->scaleDown = new HPAScalingRules();
        $this->scaleUp = new HPAScalingRules();
    }
}
