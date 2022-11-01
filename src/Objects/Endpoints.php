<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\EndpointSubsetSet;

class Endpoints extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'Endpoints';

    public const VERSION = 'v1';

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
     * The set of all endpoints is the union of all subsets. Addresses are
     * placed into subsets according to the IPs they share. A single address
     * with multiple ports, some of which are ready and some of which are not
     * (because they come from different containers) will result in the address
     * being displayed in different subsets for the different ports. No address
     * will appear in both Addresses and NotReadyAddresses in the same subset.
     * Sets of addresses and ports that comprise a service.
     */
    public ?EndpointSubsetSet $subsets = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->subsets = new EndpointSubsetSet();
    }
}
