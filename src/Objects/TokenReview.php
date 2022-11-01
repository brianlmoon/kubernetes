<?php

namespace Moonspot\Kubernetes\Objects;

class TokenReview extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'TokenReview';

    public const VERSION = 'authentication.k8s.io/v1beta1';

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
     * Spec holds information about the request being evaluated
     */
    public TokenReviewSpec $spec;

    /**
     * Status is filled in by the server and indicates whether the request can
     * be authenticated.
     */
    public ?TokenReviewStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new TokenReviewSpec();
        $this->status = new TokenReviewStatus();
    }
}
