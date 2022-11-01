<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\IDRangeSet;

class RunAsGroupStrategyOptions extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ranges are the allowed ranges of gids that may be used. If you would
     * like to force a single gid then supply a single range with the same
     * start and end. Required for MustRunAs.
     */
    public ?IDRangeSet $ranges = null;

    /**
     * rule is the strategy that will dictate the allowable RunAsGroup values
     * that may be set.
     */
    public string $rule;

    public function __construct() {
        $this->ranges = new IDRangeSet();
    }
}
