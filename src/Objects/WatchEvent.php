<?php

namespace Moonspot\Kubernetes\Objects;

class WatchEvent extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Object is:
     *  * If Type is Added or Modified: the new state of the object.
     *  * If Type is Deleted: the state of the object immediately before
     * deletion.
     *  * If Type is Error: *Status is recommended; other types may make sense
     *    depending on context.
     */
    public RawExtension $object;


    public string $type;

    public function __construct() {
        $this->object = new RawExtension();
    }
}
