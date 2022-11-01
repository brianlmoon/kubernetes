<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Event;

/**
 * Container for a set of Event objects
 *
 * @package \Moonspot\Kubernetes
 */
class EventSet extends TypedArray {
    public const REQUIRED_TYPE = Event::class;
}
