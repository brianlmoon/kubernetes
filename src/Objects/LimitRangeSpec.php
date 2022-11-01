<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\LimitRangeItemSet;

class LimitRangeSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Limits is the list of LimitRangeItem objects that are enforced.
     */
    public LimitRangeItemSet $limits;

    public function __construct() {
        $this->limits = new LimitRangeItemSet();
    }
}
