<?php

namespace Moonspot\Kubernetes\Objects;

class NonResourceAttributes extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Path is the URL path of the request
     */
    public ?string $path = null;

    /**
     * Verb is the standard HTTP verb
     */
    public ?string $verb = null;
}
