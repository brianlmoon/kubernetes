<?php

namespace Moonspot\Kubernetes\Objects;

class PodTemplateSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Specification of the desired behavior of the pod. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     */
    public ?PodSpec $spec = null;

    public function __construct() {
        $this->metadata = new ObjectMeta();
        $this->spec = new PodSpec();
    }
}
