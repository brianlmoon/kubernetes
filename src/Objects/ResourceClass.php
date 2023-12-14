<?php

namespace Moonspot\Kubernetes\Objects;

class ResourceClass extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'ResourceClass';

    public const VERSION = 'resource.k8s.io/v1alpha2';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * DriverName defines the name of the dynamic resource driver that is used
     * for allocation of a ResourceClaim that uses this class.
     * 
     * Resource drivers have a unique name in forward domain order
     * (acme.example.com).
     */
    public string $driverName;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * Standard object metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * ParametersRef references an arbitrary separate object that may hold
     * parameters that will be used by the driver when allocating a resource
     * that uses this class. A dynamic resource driver can distinguish between
     * parameters stored here and and those stored in ResourceClaimSpec.
     */
    public ?ResourceClassParametersReference $parametersRef = null;

    /**
     * Only nodes matching the selector will be considered by the scheduler
     * when trying to find a Node that fits a Pod when that Pod uses a
     * ResourceClaim that has not been allocated yet.
     * 
     * Setting this field is optional. If null, all nodes are candidates.
     */
    public ?NodeSelector $suitableNodes = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->parametersRef = new ResourceClassParametersReference();
        $this->suitableNodes = new NodeSelector();
    }
}
