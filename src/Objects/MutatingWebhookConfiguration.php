<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\MutatingWebhookSet;

class MutatingWebhookConfiguration extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'MutatingWebhookConfiguration';

    public const VERSION = 'admissionregistration.k8s.io/v1';

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
     * Standard object metadata; More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata.
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Webhooks is a list of webhooks and the affected resources and
     * operations.
     */
    public ?MutatingWebhookSet $webhooks = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->webhooks = new MutatingWebhookSet();
    }
}
