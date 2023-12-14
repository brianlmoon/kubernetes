<?php

namespace Moonspot\Kubernetes\Objects;

class ScaleStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * replicas is the actual number of observed instances of the scaled
     * object.
     */
    public int $replicas;

    /**
     * selector is the label query over pods that should match the replicas
     * count. This is same as the label selector but in the string format to
     * avoid introspection by clients. The string will be in the same format as
     * the query-param syntax. More info about label selectors:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/
     */
    public ?string $selector = null;
}
