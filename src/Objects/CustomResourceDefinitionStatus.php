<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\CustomResourceDefinitionConditionSet;
use Moonspot\Kubernetes\Objects\Sets\StringSet;

class CustomResourceDefinitionStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * acceptedNames are the names that are actually being used to serve
     * discovery. They may be different than the names in spec.
     */
    public ?CustomResourceDefinitionNames $acceptedNames = null;

    /**
     * conditions indicate state for particular aspects of a
     * CustomResourceDefinition
     */
    public ?CustomResourceDefinitionConditionSet $conditions = null;

    /**
     * storedVersions lists all versions of CustomResources that were ever
     * persisted. Tracking these versions allows a migration path for stored
     * versions in etcd. The field is mutable so a migration controller can
     * finish a migration to another version (ensuring no old objects are left
     * in storage), and then remove the rest of the versions from this list.
     * Versions may not be removed from `spec.versions` while they exist in
     * this list.
     */
    public ?StringSet $storedVersions = null;

    public function __construct() {
        $this->acceptedNames = new CustomResourceDefinitionNames();
        $this->conditions = new CustomResourceDefinitionConditionSet();
        $this->storedVersions = new StringSet();
    }
}
