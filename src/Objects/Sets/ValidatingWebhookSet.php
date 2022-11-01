<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ValidatingWebhook;

/**
 * Container for a set of ValidatingWebhook objects
 *
 * @package \Moonspot\Kubernetes
 */
class ValidatingWebhookSet extends TypedArray {
    public const REQUIRED_TYPE = ValidatingWebhook::class;
}
