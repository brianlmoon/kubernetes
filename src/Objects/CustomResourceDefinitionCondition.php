<?php

namespace Moonspot\Kubernetes\Objects;

class CustomResourceDefinitionCondition extends \Moonspot\Kubernetes\BaseObject {

    /**
     * lastTransitionTime last time the condition transitioned from one status
     * to another.
     */
    public ?Time $lastTransitionTime = null;

    /**
     * message is a human-readable message indicating details about last
     * transition.
     */
    public ?string $message = null;

    /**
     * reason is a unique, one-word, CamelCase reason for the condition's last
     * transition.
     */
    public ?string $reason = null;

    /**
     * status is the status of the condition. Can be True, False, Unknown.
     */
    public string $status;

    /**
     * type is the type of the condition. Types include Established,
     * NamesAccepted and Terminating.
     */
    public string $type;

    public function __construct() {
        $this->lastTransitionTime = new Time();
    }
}
