<?php

namespace Moonspot\Kubernetes\Objects;

class CustomResourceDefinition extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'CustomResourceDefinition';

    public const VERSION = 'apiextensions.apis.pkg.apiextensions-apiserver.k8s.io/v1beta1';

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
     * spec describes how the user wants the resources to appear
     */
    public CustomResourceDefinitionSpec $spec;

    /**
     * status indicates the actual state of the CustomResourceDefinition
     */
    public ?CustomResourceDefinitionStatus $status = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new CustomResourceDefinitionSpec();
        $this->status = new CustomResourceDefinitionStatus();
    }
}
