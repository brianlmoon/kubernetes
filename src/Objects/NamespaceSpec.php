<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class NamespaceSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Finalizers is an opaque list of values that must be empty to permanently
     * remove object from storage. More info:
     * https://kubernetes.io/docs/tasks/administer-cluster/namespaces/
     */
    public ?StringSet $finalizers = null;

    public function __construct() {
        $this->finalizers = new StringSet();
    }
}
