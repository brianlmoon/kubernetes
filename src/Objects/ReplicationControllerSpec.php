<?php

namespace Moonspot\Kubernetes\Objects;

class ReplicationControllerSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Minimum number of seconds for which a newly created pod should be ready
     * without any of its container crashing, for it to be considered
     * available. Defaults to 0 (pod will be considered available as soon as it
     * is ready)
     */
    public ?int $minReadySeconds = null;

    /**
     * Replicas is the number of desired replicas. This is a pointer to
     * distinguish between explicit zero and unspecified. Defaults to 1. More
     * info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#what-is-a-replicationcontroller
     */
    public ?int $replicas = null;

    /**
     * Selector is a label query over pods that should match the Replicas
     * count. If Selector is empty, it is defaulted to the labels present on
     * the Pod template. Label keys and values that must match in order to be
     * controlled by this replication controller, if empty defaulted to labels
     * on Pod template. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     */
    public ?array $selector = null;

    /**
     * Template is the object that describes the pod that will be created if
     * insufficient replicas are detected. This takes precedence over a
     * TemplateRef. The only allowed template.spec.restartPolicy value is
     * "Always". More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#pod-template
     */
    public ?PodTemplateSpec $template = null;

    public function __construct() {
        $this->template = new PodTemplateSpec();
    }
}
