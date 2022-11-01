<?php

namespace Moonspot\Kubernetes\Objects;

class ScaleStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * actual number of observed instances of the scaled object.
     */
    public int $replicas;

    /**
     * label query over pods that should match the replicas count. This is same
     * as the label selector but in the string format to avoid introspection by
     * clients. The string will be in the same format as the query-param
     * syntax. More info about label selectors:
     * http://kubernetes.io/docs/user-guide/labels#label-selectors
     */
    public ?string $selector = null;
}
