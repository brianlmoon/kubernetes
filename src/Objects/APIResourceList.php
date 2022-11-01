<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\APIResourceSet;

class APIResourceList extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'APIResourceList';

    public const VERSION = 'meta.apis.pkg.apimachinery.k8s.io/v1';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * groupVersion is the group and version this APIResourceList is for.
     */
    public string $groupVersion;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * resources contains the name of the resources and if they are namespaced.
     */
    public APIResourceSet $resources;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->resources = new APIResourceSet();
    }
}
