<?php

namespace Moonspot\Kubernetes\Objects;

class Condition extends \Moonspot\Kubernetes\BaseObject {

    /**
     * lastTransitionTime is the last time the condition transitioned from one
     * status to another. This should be when the underlying condition changed.
     *  If that is not known, then using the time when the API field changed is
     * acceptable.
     */
    public Time $lastTransitionTime;

    /**
     * message is a human readable message indicating details about the
     * transition. This may be an empty string.
     */
    public string $message;

    /**
     * observedGeneration represents the .metadata.generation that the
     * condition was set based upon. For instance, if .metadata.generation is
     * currently 12, but the .status.conditions[x].observedGeneration is 9, the
     * condition is out of date with respect to the current state of the
     * instance.
     */
    public ?int $observedGeneration = null;

    /**
     * reason contains a programmatic identifier indicating the reason for the
     * condition's last transition. Producers of specific condition types may
     * define expected values and meanings for this field, and whether the
     * values are considered a guaranteed API. The value should be a CamelCase
     * string. This field may not be empty.
     */
    public string $reason;

    /**
     * status of the condition, one of True, False, Unknown.
     */
    public string $status;

    /**
     * type of condition in CamelCase or in foo.example.com/CamelCase.
     */
    public string $type;

    public function __construct() {
        $this->lastTransitionTime = new Time();
    }
}
