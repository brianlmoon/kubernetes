<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class Capabilities extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Added capabilities
     */
    public ?StringSet $add = null;

    /**
     * Removed capabilities
     */
    public ?StringSet $drop = null;

    public function __construct() {
        $this->add = new StringSet();
        $this->drop = new StringSet();
    }
}
