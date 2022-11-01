<?php

namespace Moonspot\Kubernetes\Objects;

class ObjectFieldSelector extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'ObjectFieldSelector';

    public const VERSION = 'v1';

    /**
     * Version of the schema the FieldPath is written in terms of, defaults to
     * "v1".
     */
    public ?string $apiVersion = null;

    /**
     * Path of the field to select in the specified API version.
     */
    public string $fieldPath;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
    }
}
