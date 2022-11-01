<?php

namespace Moonspot\Kubernetes\Objects;

class CustomResourceSubresources extends \Moonspot\Kubernetes\BaseObject {

    /**
     * scale indicates the custom resource should serve a `/scale` subresource
     * that returns an `autoscaling/v1` Scale object.
     */
    public ?CustomResourceSubresourceScale $scale = null;

    /**
     * status indicates the custom resource should serve a `/status`
     * subresource. When enabled: 1. requests to the custom resource primary
     * endpoint ignore changes to the `status` stanza of the object. 2.
     * requests to the custom resource `/status` subresource ignore changes to
     * anything other than the `status` stanza of the object.
     */
    public ?CustomResourceSubresourceStatus $status = null;

    public function __construct() {
        $this->scale = new CustomResourceSubresourceScale();
        $this->status = new CustomResourceSubresourceStatus();
    }
}
