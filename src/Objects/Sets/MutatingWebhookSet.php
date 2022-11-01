<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\MutatingWebhook;

/**
 * Container for a set of MutatingWebhook objects
 *
 * @package \Moonspot\Kubernetes
 */
class MutatingWebhookSet extends TypedArray {
    public const REQUIRED_TYPE = MutatingWebhook::class;
}
