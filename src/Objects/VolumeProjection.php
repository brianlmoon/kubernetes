<?php

namespace Moonspot\Kubernetes\Objects;

class VolumeProjection extends \Moonspot\Kubernetes\BaseObject {

    /**
     * information about the configMap data to project
     */
    public ?ConfigMapProjection $configMap = null;

    /**
     * information about the downwardAPI data to project
     */
    public ?DownwardAPIProjection $downwardAPI = null;

    /**
     * information about the secret data to project
     */
    public ?SecretProjection $secret = null;

    /**
     * information about the serviceAccountToken data to project
     */
    public ?ServiceAccountTokenProjection $serviceAccountToken = null;

    public function __construct() {
        $this->configMap = new ConfigMapProjection();
        $this->downwardAPI = new DownwardAPIProjection();
        $this->secret = new SecretProjection();
        $this->serviceAccountToken = new ServiceAccountTokenProjection();
    }
}
