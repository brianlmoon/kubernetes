<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ValidatingAdmissionPolicy;

/**
 * Container for a set of ValidatingAdmissionPolicy objects
 *
 * @package \Moonspot\Kubernetes
 */
class ValidatingAdmissionPolicySet extends TypedArray {
    public const REQUIRED_TYPE = ValidatingAdmissionPolicy::class;
}
