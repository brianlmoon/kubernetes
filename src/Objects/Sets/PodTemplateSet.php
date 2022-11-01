<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\PodTemplate;

/**
 * Container for a set of PodTemplate objects
 *
 * @package \Moonspot\Kubernetes
 */
class PodTemplateSet extends TypedArray {
    public const REQUIRED_TYPE = PodTemplate::class;
}
