<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ValidatingWebhookConfiguration;

/**
 * Container for a set of ValidatingWebhookConfiguration objects
 *
 * @package \Moonspot\Kubernetes
 */
class ValidatingWebhookConfigurationSet extends TypedArray {
    public const REQUIRED_TYPE = ValidatingWebhookConfiguration::class;
}
