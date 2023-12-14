<?php

namespace Moonspot\Kubernetes\Objects;

class VolumeAttachmentStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * attachError represents the last error encountered during attach
     * operation, if any. This field must only be set by the entity completing
     * the attach operation, i.e. the external-attacher.
     */
    public ?VolumeError $attachError = null;

    /**
     * attached indicates the volume is successfully attached. This field must
     * only be set by the entity completing the attach operation, i.e. the
     * external-attacher.
     */
    public bool $attached;

    /**
     * attachmentMetadata is populated with any information returned by the
     * attach operation, upon successful attach, that must be passed into
     * subsequent WaitForAttach or Mount calls. This field must only be set by
     * the entity completing the attach operation, i.e. the external-attacher.
     */
    public ?array $attachmentMetadata = null;

    /**
     * detachError represents the last error encountered during detach
     * operation, if any. This field must only be set by the entity completing
     * the detach operation, i.e. the external-attacher.
     */
    public ?VolumeError $detachError = null;

    public function __construct() {
        $this->attachError = new VolumeError();
        $this->detachError = new VolumeError();
    }
}
