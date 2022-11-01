<?php

namespace Moonspot\Kubernetes\Objects;

class VolumeAttachmentSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Attacher indicates the name of the volume driver that MUST handle this
     * request. This is the name returned by GetPluginName().
     */
    public string $attacher;

    /**
     * The node that the volume should be attached to.
     */
    public string $nodeName;

    /**
     * Source represents the volume that should be attached.
     */
    public VolumeAttachmentSource $source;

    public function __construct() {
        $this->source = new VolumeAttachmentSource();
    }
}
