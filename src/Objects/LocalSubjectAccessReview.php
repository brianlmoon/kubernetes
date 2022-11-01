<?php

namespace Moonspot\Kubernetes\Objects;

class LocalSubjectAccessReview extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'LocalSubjectAccessReview';

    public const VERSION = 'authorization.k8s.io/v1beta1';

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
     * Spec holds information about the request being evaluated. 
     * spec.namespace must be equal to the namespace you made the request
     * against.  If empty, it is defaulted.
     */
    public SubjectAccessReviewSpec $spec;

    /**
     * Status is filled in by the server and indicates whether the request is
     * allowed or not
     */
    public ?SubjectAccessReviewStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new SubjectAccessReviewSpec();
        $this->status = new SubjectAccessReviewStatus();
    }
}
