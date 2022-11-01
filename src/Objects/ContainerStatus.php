<?php

namespace Moonspot\Kubernetes\Objects;

class ContainerStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Container's ID in the format 'docker://<container_id>'.
     */
    public ?string $containerID = null;

    /**
     * The image the container is running. More info:
     * https://kubernetes.io/docs/concepts/containers/images
     */
    public string $image;

    /**
     * ImageID of the container's image.
     */
    public string $imageID;

    /**
     * Details about the container's last termination condition.
     */
    public ?ContainerState $lastState = null;

    /**
     * This must be a DNS_LABEL. Each container in a pod must have a unique
     * name. Cannot be updated.
     */
    public string $name;

    /**
     * Specifies whether the container has passed its readiness probe.
     */
    public bool $ready;

    /**
     * The number of times the container has been restarted, currently based on
     * the number of dead containers that have not yet been removed. Note that
     * this is calculated from dead containers. But those containers are
     * subject to garbage collection. This value will get capped at 5 by GC.
     */
    public int $restartCount;

    /**
     * Specifies whether the container has passed its startup probe.
     * Initialized as false, becomes true after startupProbe is considered
     * successful. Resets to false when the container is restarted, or if
     * kubelet loses state temporarily. Is always true when no startupProbe is
     * defined.
     */
    public ?bool $started = null;

    /**
     * Details about the container's current condition.
     */
    public ?ContainerState $state = null;

    public function __construct() {
        $this->lastState = new ContainerState();
        $this->state = new ContainerState();
    }
}
