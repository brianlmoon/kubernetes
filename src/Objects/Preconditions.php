<?php

namespace Moonspot\Kubernetes\Objects;

class Preconditions extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Specifies the target ResourceVersion
     */
    public ?string $resourceVersion = null;

    /**
     * Specifies the target UID.
     */
    public ?string $uid = null;
}
