<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\CustomResourceColumnDefinition;

/**
 * Container for a set of CustomResourceColumnDefinition objects
 *
 * @package \Moonspot\Kubernetes
 */
class CustomResourceColumnDefinitionSet extends TypedArray {
    public const REQUIRED_TYPE = CustomResourceColumnDefinition::class;
}
