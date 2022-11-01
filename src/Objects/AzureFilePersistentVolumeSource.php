<?php

namespace Moonspot\Kubernetes\Objects;

class AzureFilePersistentVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * readOnly defaults to false (read/write). ReadOnly here will force the
     * ReadOnly setting in VolumeMounts.
     */
    public ?bool $readOnly = null;

    /**
     * secretName is the name of secret that contains Azure Storage Account
     * Name and Key
     */
    public string $secretName;

    /**
     * secretNamespace is the namespace of the secret that contains Azure
     * Storage Account Name and Key default is the same as the Pod
     */
    public ?string $secretNamespace = null;

    /**
     * shareName is the azure Share Name
     */
    public string $shareName;
}
