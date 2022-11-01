<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\LimitRangeItem;

/**
 * Container for a set of LimitRangeItem objects
 *
 * @package \Moonspot\Kubernetes
 */
class LimitRangeItemSet extends TypedArray {
    public const REQUIRED_TYPE = LimitRangeItem::class;
}
