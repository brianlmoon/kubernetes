<?php

namespace Moonspot\Kubernetes\Objects;

class PriorityClass extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'PriorityClass';

    public const VERSION = 'scheduling.k8s.io/v1';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * description is an arbitrary string that usually provides guidelines on
     * when this priority class should be used.
     */
    public ?string $description = null;

    /**
     * globalDefault specifies whether this PriorityClass should be considered
     * as the default priority for pods that do not have any priority class.
     * Only one PriorityClass can be marked as `globalDefault`. However, if
     * more than one PriorityClasses exists with their `globalDefault` field
     * set to true, the smallest value of such global default PriorityClasses
     * will be used as the default priority.
     */
    public ?bool $globalDefault = null;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public ?ObjectMeta $metadata = null;

    /**
     * PreemptionPolicy is the Policy for preempting pods with lower priority.
     * One of Never, PreemptLowerPriority. Defaults to PreemptLowerPriority if
     * unset. This field is beta-level, gated by the NonPreemptingPriority
     * feature-gate.
     */
    public ?string $preemptionPolicy = null;

    /**
     * The value of this priority class. This is the actual priority that pods
     * receive when they have the name of this class in their pod spec.
     */
    public int $value;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
    }
}
