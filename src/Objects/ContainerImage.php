<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class ContainerImage extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Names by which this image is known. e.g.
     * ["kubernetes.example/hyperkube:v1.0.7",
     * "cloud-vendor.registry.example/cloud-vendor/hyperkube:v1.0.7"]
     */
    public ?StringSet $names = null;

    /**
     * The size of the image in bytes.
     */
    public ?int $sizeBytes = null;

    public function __construct() {
        $this->names = new StringSet();
    }
}
