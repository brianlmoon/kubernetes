<?php

namespace Moonspot\Kubernetes\Objects;

class ManagedFieldsEntry extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'ManagedFieldsEntry';

    public const VERSION = 'meta.apis.pkg.apimachinery.k8s.io/v1';

    /**
     * APIVersion defines the version of this resource that this field set
     * applies to. The format is "group/version" just like the top-level
     * APIVersion field. It is necessary to track the version of a field set
     * because it cannot be automatically converted.
     */
    public ?string $apiVersion = null;

    /**
     * FieldsType is the discriminator for the different fields format and
     * version. There is currently only one possible value: "FieldsV1"
     */
    public ?string $fieldsType = null;

    /**
     * FieldsV1 holds the first JSON version format as described in the
     * "FieldsV1" type.
     */
    public ?FieldsV1 $fieldsV1 = null;

    /**
     * Manager is an identifier of the workflow managing these fields.
     */
    public ?string $manager = null;

    /**
     * Operation is the type of operation which lead to this ManagedFieldsEntry
     * being created. The only valid values for this field are 'Apply' and
     * 'Update'.
     */
    public ?string $operation = null;

    /**
     * Time is timestamp of when these fields were set. It should always be
     * empty if Operation is 'Apply'
     */
    public ?Time $time = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->fieldsV1 = new FieldsV1();
        $this->time = new Time();
    }
}
