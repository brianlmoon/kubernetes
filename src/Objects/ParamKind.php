<?php

namespace Moonspot\Kubernetes\Objects;

class ParamKind extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'ParamKind';

    public const VERSION = 'admissionregistration.k8s.io/v1beta1';

    /**
     * APIVersion is the API group version the resources belong to. In format
     * of "group/version". Required.
     */
    public ?string $apiVersion = null;

    /**
     * Kind is the API kind the resources belong to. Required.
     */
    public ?string $kind = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
    }
}
