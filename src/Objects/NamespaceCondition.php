<?php

namespace Moonspot\Kubernetes\Objects;

class NamespaceCondition extends \Moonspot\Kubernetes\BaseObject {


    public ?Time $lastTransitionTime = null;


    public ?string $message = null;


    public ?string $reason = null;

    /**
     * Status of the condition, one of True, False, Unknown.
     */
    public string $status;

    /**
     * Type of namespace controller condition.
     */
    public string $type;

    public function __construct() {
        $this->lastTransitionTime = new Time();
    }
}
