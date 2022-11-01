<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\CronJob;

/**
 * Container for a set of CronJob objects
 *
 * @package \Moonspot\Kubernetes
 */
class CronJobSet extends TypedArray {
    public const REQUIRED_TYPE = CronJob::class;
}
