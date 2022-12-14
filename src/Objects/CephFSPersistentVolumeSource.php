<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class CephFSPersistentVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * monitors is Required: Monitors is a collection of Ceph monitors More
     * info: https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     */
    public StringSet $monitors;

    /**
     * path is Optional: Used as the mounted root, rather than the full Ceph
     * tree, default is /
     */
    public ?string $path = null;

    /**
     * readOnly is Optional: Defaults to false (read/write). ReadOnly here will
     * force the ReadOnly setting in VolumeMounts. More info:
     * https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     */
    public ?bool $readOnly = null;

    /**
     * secretFile is Optional: SecretFile is the path to key ring for User,
     * default is /etc/ceph/user.secret More info:
     * https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     */
    public ?string $secretFile = null;

    /**
     * secretRef is Optional: SecretRef is reference to the authentication
     * secret for User, default is empty. More info:
     * https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     */
    public ?SecretReference $secretRef = null;

    /**
     * user is Optional: User is the rados user name, default is admin More
     * info: https://examples.k8s.io/volumes/cephfs/README.md#how-to-use-it
     */
    public ?string $user = null;

    public function __construct() {
        $this->monitors = new StringSet();
        $this->secretRef = new SecretReference();
    }
}
