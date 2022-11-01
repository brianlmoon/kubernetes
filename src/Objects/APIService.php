<?php

namespace Moonspot\Kubernetes\Objects;

class APIService extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'APIService';

    public const VERSION = 'apiregistration.apis.pkg.kube-aggregator.k8s.io/v1';

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
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Spec contains information for locating and communicating with a server
     */
    public ?APIServiceSpec $spec = null;

    /**
     * Status contains derived information about an API server
     */
    public ?APIServiceStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new APIServiceSpec();
        $this->status = new APIServiceStatus();
    }
}
