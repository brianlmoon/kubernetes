<?php

namespace Moonspot\Kubernetes\Objects;

class SelfSubjectRulesReviewSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Namespace to evaluate rules for. Required.
     */
    public ?string $namespace = null;
}
