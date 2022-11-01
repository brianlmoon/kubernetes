<?php

namespace Moonspot\Kubernetes\Objects;

class RollingUpdateStatefulSetStrategy extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Partition indicates the ordinal at which the StatefulSet should be
     * partitioned. Default value is 0.
     */
    public ?int $partition = null;
}
