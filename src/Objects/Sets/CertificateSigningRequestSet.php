<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\CertificateSigningRequest;

/**
 * Container for a set of CertificateSigningRequest objects
 *
 * @package \Moonspot\Kubernetes
 */
class CertificateSigningRequestSet extends TypedArray {
    public const REQUIRED_TYPE = CertificateSigningRequest::class;
}
