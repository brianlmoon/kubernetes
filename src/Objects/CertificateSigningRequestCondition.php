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
     * lastUpdateTime is the time of the last update to this condition
     */
    public ?Time $lastUpdateTime = null;

    /**
     * message contains a human readable message with details about the request
     * state
     */
    public ?string $message = null;

    /**
     * reason indicates a brief reason for the request state
     */
    public ?string $reason = null;

    /**
     * status of the condition, one of True, False, Unknown. Approved, Denied,
     * and Failed conditions may not be "False" or "Unknown".
     */
    public string $status;

    /**
     * type of the condition. Known conditions are "Approved", "Denied", and
     * "Failed".
     * 
     * An "Approved" condition is added via the /approval subresource,
     * indicating the request was approved and should be issued by the signer.
     * 
     * A "Denied" condition is added via the /approval subresource, indicating
     * the request was denied and should not be issued by the signer.
     * 
     * A "Failed" condition is added via the /status subresource, indicating
     * the signer failed to issue the certificate.
     * 
     * Approved and Denied conditions are mutually exclusive. Approved, Denied,
     * and Failed conditions cannot be removed once added.
     * 
     * Only one condition of a given type is allowed.
     * 
     * Possible enum values:
     *  - `"Approved"` Approved indicates the request was approved and should
     * be issued by the signer.
     *  - `"Denied"` Denied indicates the request was denied and should not be
     * issued by the signer.
     *  - `"Failed"` Failed indicates the signer failed to issue the
     * certificate.
     */
    public string $type;

    public function __construct() {
        $this->lastTransitionTime = new Time();
        $this->lastUpdateTime = new Time();
    }
}
