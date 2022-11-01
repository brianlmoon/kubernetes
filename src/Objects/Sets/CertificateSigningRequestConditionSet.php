<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\CertificateSigningRequestCondition;

/**
 * Container for a set of CertificateSigningRequestCondition objects
 *
 * @package \Moonspot\Kubernetes
 */
class CertificateSigningRequestConditionSet extends TypedArray {
    public const REQUIRED_TYPE = CertificateSigningRequestCondition::class;
}
