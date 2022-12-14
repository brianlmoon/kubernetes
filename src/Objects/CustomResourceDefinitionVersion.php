<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\CustomResourceColumnDefinitionSet;

class CustomResourceDefinitionVersion extends \Moonspot\Kubernetes\BaseObject {

    /**
     * additionalPrinterColumns specifies additional columns returned in Table
     * output. See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#receiving-resources-as-tables
     * for details. If no columns are specified, a single column displaying the
     * age of the custom resource is used.
     */
    public ?CustomResourceColumnDefinitionSet $additionalPrinterColumns = null;

    /**
     * deprecated indicates this version of the custom resource API is
     * deprecated. When set to true, API requests to this version receive a
     * warning header in the server response. Defaults to false.
     */
    public ?bool $deprecated = null;

    /**
     * deprecationWarning overrides the default warning returned to API
     * clients. May only be set when `deprecated` is true. The default warning
     * indicates this version is deprecated and recommends use of the newest
     * served version of equal or greater stability, if one exists.
     */
    public ?string $deprecationWarning = null;

    /**
     * name is the version name, e.g. “v1”, “v2beta1”, etc. The custom
     * resources are served under this version at `/apis/<group>/<version>/...`
     * if `served` is true.
     */
    public string $name;

    /**
     * schema describes the schema used for validation, pruning, and defaulting
     * of this version of the custom resource.
     */
    public ?CustomResourceValidation $schema = null;

    /**
     * served is a flag enabling/disabling this version from being served via
     * REST APIs
     */
    public bool $served;

    /**
     * storage indicates this version should be used when persisting custom
     * resources to storage. There must be exactly one version with
     * storage=true.
     */
    public bool $storage;

    /**
     * subresources specify what subresources this version of the defined
     * custom resource have.
     */
    public ?CustomResourceSubresources $subresources = null;

    public function __construct() {
        $this->additionalPrinterColumns = new CustomResourceColumnDefinitionSet();
        $this->schema = new CustomResourceValidation();
        $this->subresources = new CustomResourceSubresources();
    }
}
