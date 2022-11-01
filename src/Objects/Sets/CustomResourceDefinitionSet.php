<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\CustomResourceDefinition;

/**
 * Container for a set of CustomResourceDefinition objects
 *
 * @package \Moonspot\Kubernetes
 */
class CustomResourceDefinitionSet extends TypedArray {
    public const REQUIRED_TYPE = CustomResourceDefinition::class;
}
