<?php

namespace Moonspot\Kubernetes\Objects;

class ValidatingAdmissionPolicy extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'ValidatingAdmissionPolicy';

    public const VERSION = 'admissionregistration.k8s.io/v1beta1';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * Standard object metadata; More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata.
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Specification of the desired behavior of the ValidatingAdmissionPolicy.
     */
    public ?ValidatingAdmissionPolicySpec $spec = null;

    /**
     * The status of the ValidatingAdmissionPolicy, including warnings that are
     * useful to determine if the policy behaves in the expected way. Populated
     * by the system. Read-only.
     */
    public ?ValidatingAdmissionPolicyStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new ValidatingAdmissionPolicySpec();
        $this->status = new ValidatingAdmissionPolicyStatus();
    }
}
