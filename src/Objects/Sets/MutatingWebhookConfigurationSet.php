<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\MutatingWebhookConfiguration;

/**
 * Container for a set of MutatingWebhookConfiguration objects
 *
 * @package \Moonspot\Kubernetes
 */
class MutatingWebhookConfigurationSet extends TypedArray {
    public const REQUIRED_TYPE = MutatingWebhookConfiguration::class;
}
