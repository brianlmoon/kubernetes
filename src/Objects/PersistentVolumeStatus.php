<?php

namespace Moonspot\Kubernetes\Objects;

class PersistentVolumeStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * lastPhaseTransitionTime is the time the phase transitioned from one to
     * another and automatically resets to current time everytime a volume
     * phase transitions. This is an alpha field and requires enabling
     * PersistentVolumeLastPhaseTransitionTime feature.
     */
    public ?Time $lastPhaseTransitionTime = null;

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

    public function __construct() {
        $this->lastPhaseTransitionTime = new Time();
    }
}
