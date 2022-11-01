<?php

namespace Moonspot\Kubernetes\Objects;

class ResourceRequirements extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Limits describes the maximum amount of compute resources allowed. More
     * info:
     * https://kubernetes.io/docs/concepts/configuration/manage-resources-containers/
     */
    public ?array $limits = null;

    /**
     * Requests describes the minimum amount of compute resources required. If
     * Requests is omitted for a container, it defaults to Limits if that is
     * explicitly specified, otherwise to an implementation-defined value. More
     * info:
     * https://kubernetes.io/docs/concepts/configuration/manage-resources-containers/
     */
    public ?array $requests = null;
}
