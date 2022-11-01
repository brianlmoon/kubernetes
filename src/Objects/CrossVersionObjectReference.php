<?php

namespace Moonspot\Kubernetes\Objects;

class CrossVersionObjectReference extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'CrossVersionObjectReference';

    public const VERSION = 'autoscaling/v2beta2';

    /**
     * API version of the referent
     */
    public ?string $apiVersion = null;

    /**
     * Kind of the referent; More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds"
     */
    public string $kind;

    /**
     * Name of the referent; More info:
     * http://kubernetes.io/docs/user-guide/identifiers#names
     */
    public string $name;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
    }
}
