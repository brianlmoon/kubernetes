<?php

namespace Moonspot\Kubernetes\Objects;

class CronJobSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Specifies how to treat concurrent executions of a Job. Valid values are:
     * - "Allow" (default): allows CronJobs to run concurrently; - "Forbid":
     * forbids concurrent runs, skipping next run if previous run hasn't
     * finished yet; - "Replace": cancels currently running job and replaces it
     * with a new one
     */
    public ?string $concurrencyPolicy = null;

    /**
     * The number of failed finished jobs to retain. This is a pointer to
     * distinguish between explicit zero and not specified. Defaults to 1.
     */
    public ?int $failedJobsHistoryLimit = null;

    /**
     * Specifies the job that will be created when executing a CronJob.
     */
    public JobTemplateSpec $jobTemplate;

    /**
     * The schedule in Cron format, see https://en.wikipedia.org/wiki/Cron.
     */
    public string $schedule;

    /**
     * Optional deadline in seconds for starting the job if it misses scheduled
     * time for any reason.  Missed jobs executions will be counted as failed
     * ones.
     */
    public ?int $startingDeadlineSeconds = null;

    /**
     * The number of successful finished jobs to retain. This is a pointer to
     * distinguish between explicit zero and not specified. Defaults to 3.
     */
    public ?int $successfulJobsHistoryLimit = null;

    /**
     * This flag tells the controller to suspend subsequent executions, it does
     * not apply to already started executions.  Defaults to false.
     */
    public ?bool $suspend = null;

    public function __construct() {
        $this->jobTemplate = new JobTemplateSpec();
    }
}
