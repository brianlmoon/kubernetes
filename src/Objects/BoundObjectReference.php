<?php

namespace Moonspot\Kubernetes\Objects;

class BoundObjectReference extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'BoundObjectReference';

    public const VERSION = 'authentication.k8s.io/v1';

    /**
     * API version of the referent.
     */
    public ?string $apiVersion = null;

    /**
     * Kind of the referent. Valid kinds are 'Pod' and 'Secret'.
     */
    public ?string $kind = null;

    /**
     * Name of the referent.
     */
    public ?string $name = null;

    /**
     * UID of the referent.
     */
    public ?string $uid = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
    }
}
