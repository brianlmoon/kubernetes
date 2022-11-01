<?php

namespace Moonspot\Kubernetes\Objects;

class PriorityLevelConfigurationReference extends \Moonspot\Kubernetes\BaseObject {

    /**
     * `name` is the name of the priority level configuration being referenced
     * Required.
     */
    public string $name;
}
