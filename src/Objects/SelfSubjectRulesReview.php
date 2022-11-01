<?php

namespace Moonspot\Kubernetes\Objects;

class SelfSubjectRulesReview extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'SelfSubjectRulesReview';

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
     */
    public SelfSubjectRulesReviewSpec $spec;

    /**
     * Status is filled in by the server and indicates the set of actions a
     * user can perform.
     */
    public ?SubjectRulesReviewStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new SelfSubjectRulesReviewSpec();
        $this->status = new SubjectRulesReviewStatus();
    }
}
