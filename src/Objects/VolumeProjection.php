<?php

namespace Moonspot\Kubernetes\Objects;

class VolumeProjection extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ClusterTrustBundle allows a pod to access the `.spec.trustBundle` field
     * of ClusterTrustBundle objects in an auto-updating file.
     * 
     * Alpha, gated by the ClusterTrustBundleProjection feature gate.
     * 
     * ClusterTrustBundle objects can either be selected by name, or by the
     * combination of signer name and a label selector.
     * 
     * Kubelet performs aggressive normalization of the PEM contents written
     * into the pod filesystem.  Esoteric PEM features such as inter-block
     * comments and block headers are stripped.  Certificates are deduplicated.
     * The ordering of certificates within the file is arbitrary, and Kubelet
     * may change the order over time.
     */
    public ?ClusterTrustBundleProjection $clusterTrustBundle = null;

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
        $this->clusterTrustBundle = new ClusterTrustBundleProjection();
        $this->configMap = new ConfigMapProjection();
        $this->downwardAPI = new DownwardAPIProjection();
        $this->secret = new SecretProjection();
        $this->serviceAccountToken = new ServiceAccountTokenProjection();
    }
}
