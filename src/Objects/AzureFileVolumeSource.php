<?php

namespace Moonspot\Kubernetes\Objects;

class AzureFileVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Defaults to false (read/write). ReadOnly here will force the ReadOnly
     * setting in VolumeMounts.
     */
    public ?bool $readOnly = null;

    /**
     * the name of secret that contains Azure Storage Account Name and Key
     */
    public string $secretName;

    /**
     * Share Name
     */
    public string $shareName;
}
