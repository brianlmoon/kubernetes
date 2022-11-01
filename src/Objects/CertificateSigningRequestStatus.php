<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\CertificateSigningRequestConditionSet;

class CertificateSigningRequestStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * If request was approved, the controller will place the issued
     * certificate here.
     */
    public ?string $certificate = null;

    /**
     * Conditions applied to the request, such as approval or denial.
     */
    public ?CertificateSigningRequestConditionSet $conditions = null;

    public function __construct() {
        $this->conditions = new CertificateSigningRequestConditionSet();
    }
}
