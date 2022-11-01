<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\FlowSchema;

/**
 * Container for a set of FlowSchema objects
 *
 * @package \Moonspot\Kubernetes
 */
class FlowSchemaSet extends TypedArray {
    public const REQUIRED_TYPE = FlowSchema::class;
}
