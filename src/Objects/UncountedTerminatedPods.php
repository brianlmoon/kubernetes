<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class UncountedTerminatedPods extends \Moonspot\Kubernetes\BaseObject {

    /**
     * failed holds UIDs of failed Pods.
     */
    public ?StringSet $failed = null;

    /**
     * succeeded holds UIDs of succeeded Pods.
     */
    public ?StringSet $succeeded = null;

    public function __construct() {
        $this->failed = new StringSet();
        $this->succeeded = new StringSet();
    }
}
