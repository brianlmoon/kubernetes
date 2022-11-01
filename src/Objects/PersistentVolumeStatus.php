<?php

namespace Moonspot\Kubernetes\Objects;

class PersistentVolumeStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * message is a human-readable message indicating details about why the
     * volume is in this state.
     */
    public ?string $message = null;

    /**
     * phase indicates if a volume is available, bound to a claim, or released
     * by a claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#phase
     */
    public ?string $phase = null;

    /**
     * reason is a brief CamelCase string that describes any failure and is
     * meant for machine parsing and tidy display in the CLI.
     */
    public ?string $reason = null;
}
