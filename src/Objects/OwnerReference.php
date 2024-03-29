<?php

namespace Moonspot\Kubernetes\Objects;

class OwnerReference extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'OwnerReference';

    public const VERSION = 'meta.apis.pkg.apimachinery.k8s.io/v1';

    /**
     * API version of the referent.
     */
    public string $apiVersion;

    /**
     * If true, AND if the owner has the "foregroundDeletion" finalizer, then
     * the owner cannot be deleted from the key-value store until this
     * reference is removed. See
     * https://kubernetes.io/docs/concepts/architecture/garbage-collection/#foreground-deletion
     * for how the garbage collector interacts with this field and enforces the
     * foreground deletion. Defaults to false. To set this field, a user needs
     * "delete" permission of the owner, otherwise 422 (Unprocessable Entity)
     * will be returned.
     */
    public ?bool $blockOwnerDeletion = null;

    /**
     * If true, this reference points to the managing controller.
     */
    public ?bool $controller = null;

    /**
     * Kind of the referent. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public string $kind;

    /**
     * Name of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names#names
     */
    public string $name;

    /**
     * UID of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names#uids
     */
    public string $uid;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
    }
}
