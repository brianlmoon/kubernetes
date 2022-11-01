<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class RBDVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * fsType is the filesystem type of the volume that you want to mount. Tip:
     * Ensure that the filesystem type is supported by the host operating
     * system. Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be
     * "ext4" if unspecified. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#rbd
     */
    public ?string $fsType = null;

    /**
     * image is the rados image name. More info:
     * https://examples.k8s.io/volumes/rbd/README.md#how-to-use-it
     */
    public string $image;

    /**
     * keyring is the path to key ring for RBDUser. Default is
     * /etc/ceph/keyring. More info:
     * https://examples.k8s.io/volumes/rbd/README.md#how-to-use-it
     */
    public ?string $keyring = null;

    /**
     * monitors is a collection of Ceph monitors. More info:
     * https://examples.k8s.io/volumes/rbd/README.md#how-to-use-it
     */
    public StringSet $monitors;

    /**
     * pool is the rados pool name. Default is rbd. More info:
     * https://examples.k8s.io/volumes/rbd/README.md#how-to-use-it
     */
    public ?string $pool = null;

    /**
     * readOnly here will force the ReadOnly setting in VolumeMounts. Defaults
     * to false. More info:
     * https://examples.k8s.io/volumes/rbd/README.md#how-to-use-it
     */
    public ?bool $readOnly = null;

    /**
     * secretRef is name of the authentication secret for RBDUser. If provided
     * overrides keyring. Default is nil. More info:
     * https://examples.k8s.io/volumes/rbd/README.md#how-to-use-it
     */
    public ?LocalObjectReference $secretRef = null;

    /**
     * user is the rados user name. Default is admin. More info:
     * https://examples.k8s.io/volumes/rbd/README.md#how-to-use-it
     */
    public ?string $user = null;

    public function __construct() {
        $this->monitors = new StringSet();
        $this->secretRef = new LocalObjectReference();
    }
}
