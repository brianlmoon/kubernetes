<?php

namespace Moonspot\Kubernetes\Objects;

class VolumeAttachmentStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The last error encountered during attach operation, if any. This field
     * must only be set by the entity completing the attach operation, i.e. the
     * external-attacher.
     */
    public ?VolumeError $attachError = null;

    /**
     * Indicates the volume is successfully attached. This field must only be
     * set by the entity completing the attach operation, i.e. the
     * external-attacher.
     */
    public bool $attached;

    /**
     * Upon successful attach, this field is populated with any information
     * returned by the attach operation that must be passed into subsequent
     * WaitForAttach or Mount calls. This field must only be set by the entity
     * completing the attach operation, i.e. the external-attacher.
     */
    public ?array $attachmentMetadata = null;

    /**
     * The last error encountered during detach operation, if any. This field
     * must only be set by the entity completing the detach operation, i.e. the
     * external-attacher.
     */
    public ?VolumeError $detachError = null;

    public function __construct() {
        $this->attachError = new VolumeError();
        $this->detachError = new VolumeError();
    }
}
