<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Job;

/**
 * Container for a set of Job objects
 *
 * @package \Moonspot\Kubernetes
 */
class JobSet extends TypedArray {
    public const REQUIRED_TYPE = Job::class;
}
