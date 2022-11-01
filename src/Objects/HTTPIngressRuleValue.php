<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\HTTPIngressPathSet;

class HTTPIngressRuleValue extends \Moonspot\Kubernetes\BaseObject {

    /**
     * A collection of paths that map requests to backends.
     */
    public HTTPIngressPathSet $paths;

    public function __construct() {
        $this->paths = new HTTPIngressPathSet();
    }
}
