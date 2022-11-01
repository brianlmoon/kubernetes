<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\IDRangeSet;

class SupplementalGroupsStrategyOptions extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ranges are the allowed ranges of supplemental groups.  If you would like
     * to force a single supplemental group then supply a single range with the
     * same start and end. Required for MustRunAs.
     */
    public ?IDRangeSet $ranges = null;

    /**
     * rule is the strategy that will dictate what supplemental groups is used
     * in the SecurityContext.
     */
    public ?string $rule = null;

    public function __construct() {
        $this->ranges = new IDRangeSet();
    }
}
