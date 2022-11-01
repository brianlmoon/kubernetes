<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\CustomResourceDefinitionSet;

class CustomResourceDefinitionList extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'CustomResourceDefinitionList';

    public const VERSION = 'apiextensions.apis.pkg.apiextensions-apiserver.k8s.io/v1beta1';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * items list individual CustomResourceDefinition objects
     */
    public CustomResourceDefinitionSet $items;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;


    public ?ListMeta $metadata = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->items = new CustomResourceDefinitionSet();
        $this->metadata = new ListMeta();
    }
}
