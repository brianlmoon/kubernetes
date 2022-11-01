<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Subject;

/**
 * Container for a set of Subject objects
 *
 * @package \Moonspot\Kubernetes
 */
class SubjectSet extends TypedArray {
    public const REQUIRED_TYPE = Subject::class;
}
