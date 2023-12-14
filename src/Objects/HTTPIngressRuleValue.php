<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\HTTPIngressPathSet;

class HTTPIngressRuleValue extends \Moonspot\Kubernetes\BaseObject {

    /**
     * paths is a collection of paths that map requests to backends.
     */
    public HTTPIngressPathSet $paths;

    public function __construct() {
        $this->paths = new HTTPIngressPathSet();
    }
}
