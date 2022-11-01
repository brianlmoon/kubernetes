<?php

namespace Moonspot\Kubernetes\Objects;

class DaemonSetSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The minimum number of seconds for which a newly created DaemonSet pod
     * should be ready without any of its container crashing, for it to be
     * considered available. Defaults to 0 (pod will be considered available as
     * soon as it is ready).
     */
    public ?int $minReadySeconds = null;

    /**
     * The number of old history to retain to allow rollback. This is a pointer
     * to distinguish between explicit zero and not specified. Defaults to 10.
     */
    public ?int $revisionHistoryLimit = null;

    /**
     * A label query over pods that are managed by the daemon set. Must match
     * in order to be controlled. It must match the pod template's labels. More
     * info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     */
    public LabelSelector $selector;

    /**
     * An object that describes the pod that will be created. The DaemonSet
     * will create exactly one copy of this pod on every node that matches the
     * template's node selector (or on every node if no node selector is
     * specified). More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#pod-template
     */
    public PodTemplateSpec $template;

    /**
     * An update strategy to replace existing DaemonSet pods with new pods.
     */
    public ?DaemonSetUpdateStrategy $updateStrategy = null;

    public function __construct() {
        $this->selector = new LabelSelector();
        $this->template = new PodTemplateSpec();
        $this->updateStrategy = new DaemonSetUpdateStrategy();
    }
}
