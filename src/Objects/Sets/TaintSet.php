<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\Taint;

/**
 * Container for a set of Taint objects
 *
 * @package \Moonspot\Kubernetes
 */
class TaintSet extends TypedArray {
    public const REQUIRED_TYPE = Taint::class;
}
