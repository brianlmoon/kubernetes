<?php

namespace Moonspot\Kubernetes\Objects;

class EnvFromSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The ConfigMap to select from
     */
    public ?ConfigMapEnvSource $configMapRef = null;

    /**
     * An optional identifier to prepend to each key in the ConfigMap. Must be
     * a C_IDENTIFIER.
     */
    public ?string $prefix = null;

    /**
     * The Secret to select from
     */
    public ?SecretEnvSource $secretRef = null;

    public function __construct() {
        $this->configMapRef = new ConfigMapEnvSource();
        $this->secretRef = new SecretEnvSource();
    }
}
