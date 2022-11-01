<?php

namespace Moonspot\Kubernetes\Objects;

class PodOS extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name is the name of the operating system. The currently supported values
     * are linux and windows. Additional value may be defined in future and can
     * be one of:
     * https://github.com/opencontainers/runtime-spec/blob/master/config.md#platform-specific-configuration
     * Clients should expect to handle additional values and treat unrecognized
     * values in this field as os: null
     */
    public string $name;
}
