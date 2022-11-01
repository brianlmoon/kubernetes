<?php

namespace Moonspot\Kubernetes\Objects;

class CertificateSigningRequest extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'CertificateSigningRequest';

    public const VERSION = 'certificates.k8s.io/v1';

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


    public ?ObjectMeta $metadata = null;

    /**
     * spec contains the certificate request, and is immutable after creation.
     * Only the request, signerName, expirationSeconds, and usages fields can
     * be set on creation. Other fields are derived by Kubernetes and cannot be
     * modified by users.
     */
    public CertificateSigningRequestSpec $spec;

    /**
     * status contains information about whether the request is approved or
     * denied, and the certificate issued by the signer, or the failure
     * condition indicating signer failure.
     */
    public ?CertificateSigningRequestStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new CertificateSigningRequestSpec();
        $this->status = new CertificateSigningRequestStatus();
    }
}
