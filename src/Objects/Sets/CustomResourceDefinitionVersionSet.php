<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\CustomResourceDefinitionVersion;

/**
 * Container for a set of CustomResourceDefinitionVersion objects
 *
 * @package \Moonspot\Kubernetes
 */
class CustomResourceDefinitionVersionSet extends TypedArray {
    public const REQUIRED_TYPE = CustomResourceDefinitionVersion::class;
}
