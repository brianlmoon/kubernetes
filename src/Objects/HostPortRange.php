<?php

namespace Moonspot\Kubernetes\Objects;

class HostPortRange extends \Moonspot\Kubernetes\BaseObject {

    /**
     * max is the end of the range, inclusive.
     */
    public int $max;

    /**
     * min is the start of the range, inclusive.
     */
    public int $min;
}
