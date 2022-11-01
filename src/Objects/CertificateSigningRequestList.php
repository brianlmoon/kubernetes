<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\CertificateSigningRequestSet;

class CertificateSigningRequestList extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'CertificateSigningRequestList';

    public const VERSION = 'certificates.k8s.io/v1';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * items is a collection of CertificateSigningRequest objects
     */
    public CertificateSigningRequestSet $items;

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
        $this->items = new CertificateSigningRequestSet();
        $this->metadata = new ListMeta();
    }
}
