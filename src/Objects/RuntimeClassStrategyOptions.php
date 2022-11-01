<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class RuntimeClassStrategyOptions extends \Moonspot\Kubernetes\BaseObject {

    /**
     * allowedRuntimeClassNames is an allowlist of RuntimeClass names that may
     * be specified on a pod. A value of "*" means that any RuntimeClass name
     * is allowed, and must be the only item in the list. An empty list
     * requires the RuntimeClassName field to be unset.
     */
    public StringSet $allowedRuntimeClassNames;

    /**
     * defaultRuntimeClassName is the default RuntimeClassName to set on the
     * pod. The default MUST be allowed by the allowedRuntimeClassNames list. A
     * value of nil does not mutate the Pod.
     */
    public ?string $defaultRuntimeClassName = null;

    public function __construct() {
        $this->allowedRuntimeClassNames = new StringSet();
    }
}
