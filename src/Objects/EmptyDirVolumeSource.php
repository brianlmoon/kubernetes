<?php

namespace Moonspot\Kubernetes\Objects;

class EmptyDirVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * What type of storage medium should back this directory. The default is
     * "" which means to use the node's default medium. Must be an empty string
     * (default) or Memory. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#emptydir
     */
    public ?string $medium = null;

    /**
     * Total amount of local storage required for this EmptyDir volume. The
     * size limit is also applicable for memory medium. The maximum usage on
     * memory medium EmptyDir would be the minimum value between the SizeLimit
     * specified here and the sum of memory limits of all containers in a pod.
     * The default is nil which means that the limit is undefined. More info:
     * http://kubernetes.io/docs/user-guide/volumes#emptydir
     */
    public ?Quantity $sizeLimit = null;

    public function __construct() {
        $this->sizeLimit = new Quantity();
    }
}
