<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ForZone;

/**
 * Container for a set of ForZone objects
 *
 * @package \Moonspot\Kubernetes
 */
class ForZoneSet extends TypedArray {
    public const REQUIRED_TYPE = ForZone::class;
}
