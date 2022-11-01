<?php

namespace Moonspot\Kubernetes\Objects;

class ConfigMap extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'ConfigMap';

    public const VERSION = 'v1';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * BinaryData contains the binary data. Each key must consist of
     * alphanumeric characters, '-', '_' or '.'. BinaryData can contain byte
     * sequences that are not in the UTF-8 range. The keys stored in BinaryData
     * must not overlap with the ones in the Data field, this is enforced
     * during validation process. Using this field will require 1.10+ apiserver
     * and kubelet.
     */
    public ?array $binaryData = null;

    /**
     * Data contains the configuration data. Each key must consist of
     * alphanumeric characters, '-', '_' or '.'. Values with non-UTF-8 byte
     * sequences must use the BinaryData field. The keys stored in Data must
     * not overlap with the keys in the BinaryData field, this is enforced
     * during validation process.
     */
    public ?array $data = null;

    /**
     * Immutable, if set to true, ensures that data stored in the ConfigMap
     * cannot be updated (only object metadata can be modified). If not set to
     * true, the field can be modified at any time. Defaulted to nil.
     */
    public ?bool $immutable = null;

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

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
    }
}
