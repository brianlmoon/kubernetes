<?php

namespace Moonspot\Kubernetes\Objects;

class VolumeError extends \Moonspot\Kubernetes\BaseObject {

    /**
     * String detailing the error encountered during Attach or Detach
     * operation. This string may be logged, so it should not contain sensitive
     * information.
     */
    public ?string $message = null;

    /**
     * Time the error was encountered.
     */
    public ?Time $time = null;

    public function __construct() {
        $this->time = new Time();
    }
}
