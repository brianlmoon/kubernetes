<?php

namespace Moonspot\Kubernetes\Objects;

class ReplicaSetSpec extends \Moonspot\Kubernetes\BaseObject {

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
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller/#what-is-a-replicationcontroller
     */
    public ?int $replicas = null;

    /**
     * Selector is a label query over pods that should match the replica count.
     * Label keys and values that must match in order to be controlled by this
     * replica set. It must match the pod template's labels. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     */
    public LabelSelector $selector;

    /**
     * Template is the object that describes the pod that will be created if
     * insufficient replicas are detected. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#pod-template
     */
    public ?PodTemplateSpec $template = null;

    public function __construct() {
        $this->selector = new LabelSelector();
        $this->template = new PodTemplateSpec();
    }
}
