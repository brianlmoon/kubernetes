<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class APIResource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * categories is a list of the grouped resources this resource belongs to
     * (e.g. 'all')
     */
    public ?StringSet $categories = null;

    /**
     * group is the preferred group of the resource.  Empty implies the group
     * of the containing resource list. For subresources, this may have a
     * different value, for example: Scale".
     */
    public ?string $group = null;

    /**
     * kind is the kind for the resource (e.g. 'Foo' is the kind for a resource
     * 'foo')
     */
    public string $kind;

    /**
     * name is the plural name of the resource.
     */
    public string $name;

    /**
     * namespaced indicates if a resource is namespaced or not.
     */
    public bool $namespaced;

    /**
     * shortNames is a list of suggested short names of the resource.
     */
    public ?StringSet $shortNames = null;

    /**
     * singularName is the singular name of the resource.  This allows clients
     * to handle plural and singular opaquely. The singularName is more correct
     * for reporting status on a single item and both singular and plural are
     * allowed from the kubectl CLI interface.
     */
    public string $singularName;

    /**
     * The hash value of the storage version, the version this resource is
     * converted to when written to the data store. Value must be treated as
     * opaque by clients. Only equality comparison on the value is valid. This
     * is an alpha feature and may change or be removed in the future. The
     * field is populated by the apiserver only if the StorageVersionHash
     * feature gate is enabled. This field will remain optional even if it
     * graduates.
     */
    public ?string $storageVersionHash = null;

    /**
     * verbs is a list of supported kube verbs (this includes get, list, watch,
     * create, update, patch, delete, deletecollection, and proxy)
     */
    public StringSet $verbs;

    /**
     * version is the preferred version of the resource.  Empty implies the
     * version of the containing resource list For subresources, this may have
     * a different value, for example: v1 (while inside a v1beta1 version of
     * the core resource's group)".
     */
    public ?string $version = null;

    public function __construct() {
        $this->categories = new StringSet();
        $this->shortNames = new StringSet();
        $this->verbs = new StringSet();
    }
}
