<?php

namespace Moonspot\Kubernetes\Objects;

class EnvVarSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Selects a key of a ConfigMap.
     */
    public ?ConfigMapKeySelector $configMapKeyRef = null;

    /**
     * Selects a field of the pod: supports metadata.name, metadata.namespace,
     * `metadata.labels['<KEY>']`, `metadata.annotations['<KEY>']`,
     * spec.nodeName, spec.serviceAccountName, status.hostIP, status.podIP,
     * status.podIPs.
     */
    public ?ObjectFieldSelector $fieldRef = null;

    /**
     * Selects a resource of the container: only resources limits and requests
     * (limits.cpu, limits.memory, limits.ephemeral-storage, requests.cpu,
     * requests.memory and requests.ephemeral-storage) are currently supported.
     */
    public ?ResourceFieldSelector $resourceFieldRef = null;

    /**
     * Selects a key of a secret in the pod's namespace
     */
    public ?SecretKeySelector $secretKeyRef = null;

    public function __construct() {
        $this->configMapKeyRef = new ConfigMapKeySelector();
        $this->fieldRef = new ObjectFieldSelector();
        $this->resourceFieldRef = new ResourceFieldSelector();
        $this->secretKeyRef = new SecretKeySelector();
    }
}
