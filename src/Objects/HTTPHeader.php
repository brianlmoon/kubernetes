<?php

namespace Moonspot\Kubernetes\Objects;

class HTTPHeader extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The header field name. This will be canonicalized upon output, so
     * case-variant names will be understood as the same header.
     */
    public string $name;

    /**
     * The header field value
     */
    public string $value;
}
