<?php

namespace Moonspot\Kubernetes\Objects;

class CrossVersionObjectReference extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'CrossVersionObjectReference';

    public const VERSION = 'autoscaling/v2';

    /**
     * apiVersion is the API version of the referent
     */
    public ?string $apiVersion = null;

    /**
     * kind is the kind of the referent; More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public string $kind;

    /**
     * name is the name of the referent; More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     */
    public string $name;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
    }
}
