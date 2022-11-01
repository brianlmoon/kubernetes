<?php

namespace Moonspot\Kubernetes\Objects\Sets;

use Moonspot\Kubernetes\TypedArray;
use Moonspot\Kubernetes\Objects\DownwardAPIVolumeFile;

/**
 * Container for a set of DownwardAPIVolumeFile objects
 *
 * @package \Moonspot\Kubernetes
 */
class DownwardAPIVolumeFileSet extends TypedArray {
    public const REQUIRED_TYPE = DownwardAPIVolumeFile::class;
}
