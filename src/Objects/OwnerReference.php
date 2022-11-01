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
     * reference is removed. Defaults to false. To set this field, a user needs
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
     * http://kubernetes.io/docs/user-guide/identifiers#names
     */
    public string $name;

    /**
     * UID of the referent. More info:
     * http://kubernetes.io/docs/user-guide/identifiers#uids
     */
    public string $uid;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
    }
}
