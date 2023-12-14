<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class PodSchedulingContextSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * PotentialNodes lists nodes where the Pod might be able to run.
     * 
     * The size of this field is limited to 128. This is large enough for many
     * clusters. Larger clusters may need more attempts to find a node that
     * suits all pending resources. This may get increased in the future, but
     * not reduced.
     */
    public ?StringSet $potentialNodes = null;

    /**
     * SelectedNode is the node for which allocation of ResourceClaims that are
     * referenced by the Pod and that use "WaitForFirstConsumer" allocation is
     * to be attempted.
     */
    public ?string $selectedNode = null;

    public function __construct() {
        $this->potentialNodes = new StringSet();
    }
}
