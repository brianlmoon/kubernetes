<?php

namespace Moonspot\Kubernetes\Objects;

class VolumeAttributesClass extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'VolumeAttributesClass';

    public const VERSION = 'storage.k8s.io/v1alpha1';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * Name of the CSI driver This field is immutable.
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
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * parameters hold volume attributes defined by the CSI driver. These
     * values are opaque to the Kubernetes and are passed directly to the CSI
     * driver. The underlying storage provider supports changing these
     * attributes on an existing volume, however the parameters field itself is
     * immutable. To invoke a volume update, a new VolumeAttributesClass should
     * be created with new parameters, and the PersistentVolumeClaim should be
     * updated to reference the new VolumeAttributesClass.
     * 
     * This field is required and must contain at least one key/value pair. The
     * keys cannot be empty, and the maximum number of parameters is 512, with
     * a cumulative max size of 256K. If the CSI driver rejects invalid
     * parameters, the target PersistentVolumeClaim will be set to an
     * "Infeasible" state in the modifyVolumeStatus field.
     */
    public ?array $parameters = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
    }
}
