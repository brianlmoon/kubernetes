<?php

namespace Moonspot\Kubernetes\Objects;

class NamespaceCondition extends \Moonspot\Kubernetes\BaseObject {


    public ?Time $lastTransitionTime = null;


    public ?string $message = null;


    public ?string $reason = null;

    /**
     * Status of the condition, one of True, False, Unknown.
     */
    public string $status;

    /**
     * Type of namespace controller condition.
     * 
     * Possible enum values:
     *  - `"NamespaceContentRemaining"` contains information about resources
     * remaining in a namespace.
     *  - `"NamespaceDeletionContentFailure"` contains information about
     * namespace deleter errors during deletion of resources.
     *  - `"NamespaceDeletionDiscoveryFailure"` contains information about
     * namespace deleter errors during resource discovery.
     *  - `"NamespaceDeletionGroupVersionParsingFailure"` contains information
     * about namespace deleter errors parsing GV for legacy types.
     *  - `"NamespaceFinalizersRemaining"` contains information about which
     * finalizers are on resources remaining in a namespace.
     */
    public string $type;

    public function __construct() {
        $this->lastTransitionTime = new Time();
    }
}
