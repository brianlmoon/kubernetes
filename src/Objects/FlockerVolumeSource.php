<?php

namespace Moonspot\Kubernetes\Objects;

class FlockerVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name of the dataset stored as metadata -> name on the dataset for
     * Flocker should be considered as deprecated
     */
    public ?string $datasetName = null;

    /**
     * UUID of the dataset. This is unique identifier of a Flocker dataset
     */
    public ?string $datasetUUID = null;
}
