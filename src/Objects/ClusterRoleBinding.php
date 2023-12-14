<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\SubjectSet;

class ClusterRoleBinding extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'ClusterRoleBinding';

    public const VERSION = 'rbac.k8s.io/v1';

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * Standard object's metadata.
     */
    public ?ObjectMeta $metadata = null;

    /**
     * RoleRef can only reference a ClusterRole in the global namespace. If the
     * RoleRef cannot be resolved, the Authorizer must return an error. This
     * field is immutable.
     */
    public RoleRef $roleRef;

    /**
     * Subjects holds references to the objects the role applies to.
     */
    public ?SubjectSet $subjects = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->metadata = new ObjectMeta();
        $this->roleRef = new RoleRef();
        $this->subjects = new SubjectSet();
    }
}
