<?php

namespace Moonspot\Kubernetes\Objects;

class FlockerVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * datasetName is Name of the dataset stored as metadata -> name on the
     * dataset for Flocker should be considered as deprecated
     */
    public ?string $datasetName = null;

    /**
     * datasetUUID is the UUID of the dataset. This is unique identifier of a
     * Flocker dataset
     */
    public ?string $datasetUUID = null;
}
