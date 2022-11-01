<?php

namespace Moonspot\Kubernetes\Objects;

class Status extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'Status';

    public const VERSION = 'meta.apis.pkg.apimachinery.k8s.io/v1';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * Suggested HTTP return code for this status, 0 if not set.
     */
    public ?int $code = null;

    /**
     * Extended data associated with the reason.  Each reason may define its
     * own extended details. This field is optional and the data returned is
     * not guaranteed to conform to any schema except that defined by the
     * reason type.
     */
    public ?StatusDetails $details = null;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * A human-readable description of the status of this operation.
     */
    public ?string $message = null;

    /**
     * Standard list metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?ListMeta $metadata = null;

    /**
     * A machine-readable description of why this operation is in the "Failure"
     * status. If this value is empty there is no information available. A
     * Reason clarifies an HTTP status code but does not override it.
     */
    public ?string $reason = null;

    /**
     * Status of the operation. One of: "Success" or "Failure". More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     */
    public ?string $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->details = new StatusDetails();
        $this->metadata = new ListMeta();
    }
}
