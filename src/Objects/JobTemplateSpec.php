<?php

namespace Moonspot\Kubernetes\Objects;

class JobTemplateSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Standard object's metadata of the jobs created from this template. More
     * info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Specification of the desired behavior of the job. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     */
    public ?JobSpec $spec = null;

    public function __construct() {
        $this->metadata = new ObjectMeta();
        $this->spec = new JobSpec();
    }
}
