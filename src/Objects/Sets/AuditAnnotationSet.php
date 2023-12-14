<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\AuditAnnotation;

/**
 * Container for a set of AuditAnnotation objects
 *
 * @package \Moonspot\Kubernetes
 */
class AuditAnnotationSet extends TypedArray {
    public const REQUIRED_TYPE = AuditAnnotation::class;
}
