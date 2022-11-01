<?php

namespace Moonspot\Kubernetes\Objects;

class AzureFilePersistentVolumeSource extends \Moonspot\Kubernetes\BaseObject {

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
     * the namespace of the secret that contains Azure Storage Account Name and
     * Key default is the same as the Pod
     */
    public ?string $secretNamespace = null;

    /**
     * Share Name
     */
    public string $shareName;
}
