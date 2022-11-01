<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StatusCauseSet;

class StatusDetails extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The Causes array includes more details associated with the StatusReason
     * failure. Not all StatusReasons may provide detailed causes.
     */
    public ?StatusCauseSet $causes = null;

    /**
     * The group attribute of the resource associated with the status
     * StatusReason.
     */
    public ?string $group = null;

    /**
     * The kind attribute of the resource associated with the status
     * StatusReason. On some operations may differ from the requested resource
     * Kind. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * The name attribute of the resource associated with the status
     * StatusReason (when there is a single name which can be described).
     */
    public ?string $name = null;

    /**
     * If specified, the time in seconds before the operation should be
     * retried. Some errors may indicate the client must take an alternate
     * action - for those errors this field may indicate how long to wait
     * before taking the alternate action.
     */
    public ?int $retryAfterSeconds = null;

    /**
     * UID of the resource. (when there is a single resource which can be
     * described). More info:
     * http://kubernetes.io/docs/user-guide/identifiers#uids
     */
    public ?string $uid = null;

    public function __construct() {
        $this->causes = new StatusCauseSet();
    }
}
