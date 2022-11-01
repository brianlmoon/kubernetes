<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\JSONSchemaProps;

/**
 * Container for a set of JSONSchemaProps objects
 *
 * @package \Moonspot\Kubernetes
 */
class JSONSchemaPropsSet extends TypedArray {
    public const REQUIRED_TYPE = JSONSchemaProps::class;
}
