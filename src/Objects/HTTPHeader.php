<?php

namespace Moonspot\Kubernetes\Objects;

class HTTPHeader extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The header field name
     */
    public string $name;

    /**
     * The header field value
     */
    public string $value;
}
