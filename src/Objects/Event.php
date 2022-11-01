<?php

namespace Moonspot\Kubernetes\Objects;

class Event extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'Event';

    public const VERSION = 'events.k8s.io/v1';

    /**
     * action is what action was taken/failed regarding to the regarding
     * object. It is machine-readable. This field cannot be empty for new
     * Events and it can have at most 128 characters.
     */
    public ?string $action = null;

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * deprecatedCount is the deprecated field assuring backward compatibility
     * with core.v1 Event type.
     */
    public ?int $deprecatedCount = null;

    /**
     * deprecatedFirstTimestamp is the deprecated field assuring backward
     * compatibility with core.v1 Event type.
     */
    public ?Time $deprecatedFirstTimestamp = null;

    /**
     * deprecatedLastTimestamp is the deprecated field assuring backward
     * compatibility with core.v1 Event type.
     */
    public ?Time $deprecatedLastTimestamp = null;

    /**
     * deprecatedSource is the deprecated field assuring backward compatibility
     * with core.v1 Event type.
     */
    public ?EventSource $deprecatedSource = null;

    /**
     * eventTime is the time when this Event was first observed. It is
     * required.
     */
    public MicroTime $eventTime;

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
     * note is a human-readable description of the status of this operation.
     * Maximal length of the note is 1kB, but libraries should be prepared to
     * handle values up to 64kB.
     */
    public ?string $note = null;

    /**
     * reason is why the action was taken. It is human-readable. This field
     * cannot be empty for new Events and it can have at most 128 characters.
     */
    public ?string $reason = null;

    /**
     * regarding contains the object this Event is about. In most cases it's an
     * Object reporting controller implements, e.g. ReplicaSetController
     * implements ReplicaSets and this event is emitted because it acts on some
     * changes in a ReplicaSet object.
     */
    public ?ObjectReference $regarding = null;

    /**
     * related is the optional secondary object for more complex actions. E.g.
     * when regarding object triggers a creation or deletion of related object.
     */
    public ?ObjectReference $related = null;

    /**
     * reportingController is the name of the controller that emitted this
     * Event, e.g. `kubernetes.io/kubelet`. This field cannot be empty for new
     * Events.
     */
    public ?string $reportingController = null;

    /**
     * reportingInstance is the ID of the controller instance, e.g.
     * `kubelet-xyzf`. This field cannot be empty for new Events and it can
     * have at most 128 characters.
     */
    public ?string $reportingInstance = null;

    /**
     * series is data about the Event series this event represents or nil if
     * it's a singleton Event.
     */
    public ?EventSeries $series = null;

    /**
     * type is the type of this event (Normal, Warning), new types could be
     * added in the future. It is machine-readable. This field cannot be empty
     * for new Events.
     */
    public ?string $type = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->deprecatedFirstTimestamp = new Time();
        $this->deprecatedLastTimestamp = new Time();
        $this->deprecatedSource = new EventSource();
        $this->eventTime = new MicroTime();
        $this->metadata = new ObjectMeta();
        $this->regarding = new ObjectReference();
        $this->related = new ObjectReference();
        $this->series = new EventSeries();
    }
}
