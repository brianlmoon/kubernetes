<?php

namespace Moonspot\Kubernetes\Objects;

class CSIDriver extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'CSIDriver';

    public const VERSION = 'storage.k8s.io/v1beta1';

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
     * Standard object metadata. metadata.Name indicates the name of the CSI
     * driver that this object refers to; it MUST be the same name returned by
     * the CSI GetPluginName() call for that driver. The driver name must be 63
     * characters or less, beginning and ending with an alphanumeric character
     * ([a-z0-9A-Z]) with dashes (-), dots (.), and alphanumerics between. More
     * info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Specification of the CSI Driver.
     */
    public CSIDriverSpec $spec;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->spec = new CSIDriverSpec();
    }
}
