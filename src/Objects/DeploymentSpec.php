<?php

namespace Moonspot\Kubernetes\Objects;

class DeploymentSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Minimum number of seconds for which a newly created pod should be ready
     * without any of its container crashing, for it to be considered
     * available. Defaults to 0 (pod will be considered available as soon as it
     * is ready)
     */
    public ?int $minReadySeconds = null;

    /**
     * Indicates that the deployment is paused.
     */
    public ?bool $paused = null;

    /**
     * The maximum time in seconds for a deployment to make progress before it
     * is considered to be failed. The deployment controller will continue to
     * process failed deployments and a condition with a
     * ProgressDeadlineExceeded reason will be surfaced in the deployment
     * status. Note that progress will not be estimated during the time a
     * deployment is paused. Defaults to 600s.
     */
    public ?int $progressDeadlineSeconds = null;

    /**
     * Number of desired pods. This is a pointer to distinguish between
     * explicit zero and not specified. Defaults to 1.
     */
    public ?int $replicas = null;

    /**
     * The number of old ReplicaSets to retain to allow rollback. This is a
     * pointer to distinguish between explicit zero and not specified. Defaults
     * to 10.
     */
    public ?int $revisionHistoryLimit = null;

    /**
     * Label selector for pods. Existing ReplicaSets whose pods are selected by
     * this will be the ones affected by this deployment. It must match the pod
     * template's labels.
     */
    public LabelSelector $selector;

    /**
     * The deployment strategy to use to replace existing pods with new ones.
     */
    public ?DeploymentStrategy $strategy = null;

    /**
     * Template describes the pods that will be created.
     */
    public PodTemplateSpec $template;

    public function __construct() {
        $this->selector = new LabelSelector();
        $this->strategy = new DeploymentStrategy();
        $this->template = new PodTemplateSpec();
    }
}
