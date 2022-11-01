<?php

namespace Moonspot\Kubernetes\Objects;

class VolumeProjection extends \Moonspot\Kubernetes\BaseObject {

    /**
     * configMap information about the configMap data to project
     */
    public ?ConfigMapProjection $configMap = null;

    /**
     * downwardAPI information about the downwardAPI data to project
     */
    public ?DownwardAPIProjection $downwardAPI = null;

    /**
     * secret information about the secret data to project
     */
    public ?SecretProjection $secret = null;

    /**
     * serviceAccountToken is information about the serviceAccountToken data to
     * project
     */
    public ?ServiceAccountTokenProjection $serviceAccountToken = null;

    public function __construct() {
        $this->configMap = new ConfigMapProjection();
        $this->downwardAPI = new DownwardAPIProjection();
        $this->secret = new SecretProjection();
        $this->serviceAccountToken = new ServiceAccountTokenProjection();
    }
}
