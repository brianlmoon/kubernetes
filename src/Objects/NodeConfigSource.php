<?php

namespace Moonspot\Kubernetes\Objects;

class NodeConfigSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ConfigMap is a reference to a Node's ConfigMap
     */
    public ?ConfigMapNodeConfigSource $configMap = null;

    public function __construct() {
        $this->configMap = new ConfigMapNodeConfigSource();
    }
}
