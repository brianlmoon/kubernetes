<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\JobConditionSet;

class JobStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The number of actively running pods.
     */
    public ?int $active = null;

    /**
     * CompletedIndexes holds the completed indexes when .spec.completionMode =
     * "Indexed" in a text format. The indexes are represented as decimal
     * integers separated by commas. The numbers are listed in increasing
     * order. Three or more consecutive numbers are compressed and represented
     * by the first and last element of the series, separated by a hyphen. For
     * example, if the completed indexes are 1, 3, 4, 5 and 7, they are
     * represented as "1,3-5,7".
     */
    public ?string $completedIndexes = null;

    /**
     * Represents time when the job was completed. It is not guaranteed to be
     * set in happens-before order across separate operations. It is
     * represented in RFC3339 form and is in UTC. The completion time is only
     * set when the job finishes successfully.
     */
    public ?Time $completionTime = null;

    /**
     * The latest available observations of an object's current state. When a
     * Job fails, one of the conditions will have type "Failed" and status
     * true. When a Job is suspended, one of the conditions will have type
     * "Suspended" and status true; when the Job is resumed, the status of this
     * condition will become false. When a Job is completed, one of the
     * conditions will have type "Complete" and status true. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     */
    public ?JobConditionSet $conditions = null;

    /**
     * The number of pods which reached phase Failed.
     */
    public ?int $failed = null;

    /**
     * Represents time when the job controller started processing a job. When a
     * Job is created in the suspended state, this field is not set until the
     * first time it is resumed. This field is reset every time a Job is
     * resumed from suspension. It is represented in RFC3339 form and is in
     * UTC.
     */
    public ?Time $startTime = null;

    /**
     * The number of pods which reached phase Succeeded.
     */
    public ?int $succeeded = null;

    public function __construct() {
        $this->completionTime = new Time();
        $this->conditions = new JobConditionSet();
        $this->startTime = new Time();
    }
}
