<?php

namespace Moonspot\Kubernetes\Objects;

class ObjectReference extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'ObjectReference';

    public const VERSION = 'v1';

    /**
     * API version of the referent.
     */
    public ?string $apiVersion = null;

    /**
     * If referring to a piece of an object instead of an entire object, this
     * string should contain a valid JSON/Go field access statement, such as
     * desiredState.manifest.containers[2]. For example, if the object
     * reference is to a container within a pod, this would take on a value
     * like: "spec.containers{name}" (where "name" refers to the name of the
     * container that triggered the event) or if no container name is specified
     * "spec.containers[2]" (container with index 2 in this pod). This syntax
     * is chosen only to have some well-defined way of referencing a part of an
     * object.
     */
    public ?string $fieldPath = null;

    /**
     * Kind of the referent. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * Name of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     */
    public ?string $name = null;

    /**
     * Namespace of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/namespaces/
     */
    public ?string $namespace = null;

    /**
     * Specific resourceVersion to which this reference is made, if any. More
     * info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#concurrency-control-and-consistency
     */
    public ?string $resourceVersion = null;

    /**
     * UID of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#uids
     */
    public ?string $uid = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
    }
}
