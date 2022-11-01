<?php

namespace Moonspot\Kubernetes\Objects;

class Secret extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'Secret';

    public const VERSION = 'v1';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * Data contains the secret data. Each key must consist of alphanumeric
     * characters, '-', '_' or '.'. The serialized form of the secret data is a
     * base64 encoded string, representing the arbitrary (possibly non-string)
     * data value here. Described in
     * https://tools.ietf.org/html/rfc4648#section-4
     */
    public ?array $data = null;

    /**
     * Immutable, if set to true, ensures that data stored in the Secret cannot
     * be updated (only object metadata can be modified). If not set to true,
     * the field can be modified at any time. Defaulted to nil.
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

    /**
     * stringData allows specifying non-binary secret data in string form. It
     * is provided as a write-only input field for convenience. All keys and
     * values are merged into the data field on write, overwriting any existing
     * values. The stringData field is never output when reading from the API.
     */
    public ?array $stringData = null;

    /**
     * Used to facilitate programmatic handling of secret data.
     */
    public ?string $type = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
    }
}
