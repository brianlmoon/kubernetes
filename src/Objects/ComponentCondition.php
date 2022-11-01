<?php

namespace Moonspot\Kubernetes\Objects;

class ComponentCondition extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Condition error code for a component. For example, a health check error
     * code.
     */
    public ?string $error = null;

    /**
     * Message about the condition for a component. For example, information
     * about a health check.
     */
    public ?string $message = null;

    /**
     * Status of the condition for a component. Valid values for "Healthy":
     * "True", "False", or "Unknown".
     */
    public string $status;

    /**
     * Type of condition for a component. Valid value: "Healthy"
     */
    public string $type;
}
