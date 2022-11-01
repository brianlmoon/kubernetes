<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\ObjectReferenceSet;

class CronJobStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * A list of pointers to currently running jobs.
     */
    public ?ObjectReferenceSet $active = null;

    /**
     * Information when was the last time the job was successfully scheduled.
     */
    public ?Time $lastScheduleTime = null;

    /**
     * Information when was the last time the job successfully completed.
     */
    public ?Time $lastSuccessfulTime = null;

    public function __construct() {
        $this->active = new ObjectReferenceSet();
        $this->lastScheduleTime = new Time();
        $this->lastSuccessfulTime = new Time();
    }
}
