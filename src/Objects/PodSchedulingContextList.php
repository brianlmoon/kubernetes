<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\PodSchedulingContextSet;

class PodSchedulingContextList extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'PodSchedulingContextList';

    public const VERSION = 'resource.k8s.io/v1alpha2';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * Items is the list of PodSchedulingContext objects.
     */
    public PodSchedulingContextSet $items;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * Standard list metadata
     */
    public ?ListMeta $metadata = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->items = new PodSchedulingContextSet();
        $this->metadata = new ListMeta();
    }
}
