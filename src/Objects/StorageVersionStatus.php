<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StorageVersionConditionSet;
use Moonspot\Kubernetes\Objects\Sets\ServerStorageVersionSet;

class StorageVersionStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * If all API server instances agree on the same encoding storage version,
     * then this field is set to that version. Otherwise this field is left
     * empty. API servers should finish updating its storageVersionStatus entry
     * before serving write operations, so that this field will be in sync with
     * the reality.
     */
    public ?string $commonEncodingVersion = null;

    /**
     * The latest available observations of the storageVersion's state.
     */
    public ?StorageVersionConditionSet $conditions = null;

    /**
     * The reported versions per API server instance.
     */
    public ?ServerStorageVersionSet $storageVersions = null;

    public function __construct() {
        $this->conditions = new StorageVersionConditionSet();
        $this->storageVersions = new ServerStorageVersionSet();
    }
}
