<?php

namespace Moonspot\Kubernetes\Objects;

class GroupVersionForDiscovery extends \Moonspot\Kubernetes\BaseObject {

    /**
     * groupVersion specifies the API group and version in the form
     * "group/version"
     */
    public string $groupVersion;

    /**
     * version specifies the version in the form of "version". This is to save
     * the clients the trouble of splitting the GroupVersion.
     */
    public string $version;
}
