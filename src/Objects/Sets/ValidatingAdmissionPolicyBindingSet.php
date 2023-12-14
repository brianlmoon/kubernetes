<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ValidatingAdmissionPolicyBinding;

/**
 * Container for a set of ValidatingAdmissionPolicyBinding objects
 *
 * @package \Moonspot\Kubernetes
 */
class ValidatingAdmissionPolicyBindingSet extends TypedArray {
    public const REQUIRED_TYPE = ValidatingAdmissionPolicyBinding::class;
}
