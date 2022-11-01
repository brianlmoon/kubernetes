<?php

namespace Moonspot\Kubernetes\Objects;

class CustomResourceValidation extends \Moonspot\Kubernetes\BaseObject {

    /**
     * openAPIV3Schema is the OpenAPI v3 schema to use for validation and
     * pruning.
     */
    public ?JSONSchemaProps $openAPIV3Schema = null;

    public function __construct() {
        $this->openAPIV3Schema = new JSONSchemaProps();
    }
}
