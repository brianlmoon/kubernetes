<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ResourceClaimTemplate;

/**
 * Container for a set of ResourceClaimTemplate objects
 *
 * @package \Moonspot\Kubernetes
 */
class ResourceClaimTemplateSet extends TypedArray {
    public const REQUIRED_TYPE = ResourceClaimTemplate::class;
}
