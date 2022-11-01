<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\ManagedFieldsEntry;

/**
 * Container for a set of ManagedFieldsEntry objects
 *
 * @package \Moonspot\Kubernetes
 */
class ManagedFieldsEntrySet extends TypedArray {
    public const REQUIRED_TYPE = ManagedFieldsEntry::class;
}
