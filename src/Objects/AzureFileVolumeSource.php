<?php

namespace Moonspot\Kubernetes\Objects;

class AzureFileVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * readOnly defaults to false (read/write). ReadOnly here will force the
     * ReadOnly setting in VolumeMounts.
     */
    public ?bool $readOnly = null;

    /**
     * secretName is the  name of secret that contains Azure Storage Account
     * Name and Key
     */
    public string $secretName;

    /**
     * shareName is the azure share Name
     */
    public string $shareName;
}
