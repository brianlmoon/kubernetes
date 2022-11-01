<?php

namespace Moonspot\Kubernetes\Objects;

class MetricStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * container resource refers to a resource metric (such as those specified
     * in requests and limits) known to Kubernetes describing a single
     * container in each pod in the current scale target (e.g. CPU or memory).
     * Such metrics are built in to Kubernetes, and have special scaling
     * options on top of those available to normal per-pod metrics using the
     * "pods" source.
     */
    public ?ContainerResourceMetricStatus $containerResource = null;

    /**
     * external refers to a global metric that is not associated with any
     * Kubernetes object. It allows autoscaling based on information coming
     * from components running outside of cluster (for example length of queue
     * in cloud messaging service, or QPS from loadbalancer running outside of
     * cluster).
     */
    public ?ExternalMetricStatus $external = null;

    /**
     * object refers to a metric describing a single kubernetes object (for
     * example, hits-per-second on an Ingress object).
     */
    public ?ObjectMetricStatus $object = null;

    /**
     * pods refers to a metric describing each pod in the current scale target
     * (for example, transactions-processed-per-second).  The values will be
     * averaged together before being compared to the target value.
     */
    public ?PodsMetricStatus $pods = null;

    /**
     * resource refers to a resource metric (such as those specified in
     * requests and limits) known to Kubernetes describing each pod in the
     * current scale target (e.g. CPU or memory). Such metrics are built in to
     * Kubernetes, and have special scaling options on top of those available
     * to normal per-pod metrics using the "pods" source.
     */
    public ?ResourceMetricStatus $resource = null;

    /**
     * type is the type of metric source.  It will be one of
     * "ContainerResource", "External", "Object", "Pods" or "Resource", each
     * corresponds to a matching field in the object. Note: "ContainerResource"
     * type is available on when the feature-gate HPAContainerMetrics is
     * enabled
     */
    public string $type;

    public function __construct() {
        $this->containerResource = new ContainerResourceMetricStatus();
        $this->external = new ExternalMetricStatus();
        $this->object = new ObjectMetricStatus();
        $this->pods = new PodsMetricStatus();
        $this->resource = new ResourceMetricStatus();
    }
}
