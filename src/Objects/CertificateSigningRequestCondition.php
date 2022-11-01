<?php

namespace Moonspot\Kubernetes\Objects;

class CertificateSigningRequestCondition extends \Moonspot\Kubernetes\BaseObject {

    /**
     * lastTransitionTime is the time the condition last transitioned from one
     * status to another. If unset, when a new condition type is added or an
     * existing condition's status is changed, the server defaults this to the
     * current time.
     */
    public ?Time $lastTransitionTime = null;

    /**
     * timestamp for the last update to this condition
     */
    public ?Time $lastUpdateTime = null;

    /**
     * human readable message with details about the request state
     */
    public ?string $message = null;

    /**
     * brief reason for the request state
     */
    public ?string $reason = null;

    /**
     * Status of the condition, one of True, False, Unknown. Approved, Denied,
     * and Failed conditions may not be "False" or "Unknown". Defaults to
     * "True". If unset, should be treated as "True".
     */
    public ?string $status = null;

    /**
     * type of the condition. Known conditions include "Approved", "Denied",
     * and "Failed".
     */
    public string $type;

    public function __construct() {
        $this->lastTransitionTime = new Time();
        $this->lastUpdateTime = new Time();
    }
}
