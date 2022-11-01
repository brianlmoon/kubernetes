<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class CustomResourceDefinitionNames extends \Moonspot\Kubernetes\BaseObject {

    /**
     * categories is a list of grouped resources this custom resource belongs
     * to (e.g. 'all'). This is published in API discovery documents, and used
     * by clients to support invocations like `kubectl get all`.
     */
    public ?StringSet $categories = null;

    /**
     * kind is the serialized kind of the resource. It is normally CamelCase
     * and singular. Custom resource instances will use this value as the
     * `kind` attribute in API calls.
     */
    public string $kind;

    /**
     * listKind is the serialized kind of the list for this resource. Defaults
     * to "`kind`List".
     */
    public ?string $listKind = null;

    /**
     * plural is the plural name of the resource to serve. The custom resources
     * are served under `/apis/<group>/<version>/.../<plural>`. Must match the
     * name of the CustomResourceDefinition (in the form
     * `<names.plural>.<group>`). Must be all lowercase.
     */
    public string $plural;

    /**
     * shortNames are short names for the resource, exposed in API discovery
     * documents, and used by clients to support invocations like `kubectl get
     * <shortname>`. It must be all lowercase.
     */
    public ?StringSet $shortNames = null;

    /**
     * singular is the singular name of the resource. It must be all lowercase.
     * Defaults to lowercased `kind`.
     */
    public ?string $singular = null;

    public function __construct() {
        $this->categories = new StringSet();
        $this->shortNames = new StringSet();
    }
}
