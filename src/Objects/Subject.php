<?php

namespace Moonspot\Kubernetes\Objects;

class Subject extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'Subject';

    public const VERSION = 'rbac.k8s.io/v1alpha1';

    /**
     * APIVersion holds the API group and version of the referenced subject.
     * Defaults to "v1" for ServiceAccount subjects. Defaults to
     * "rbac.authorization.k8s.io/v1alpha1" for User and Group subjects.
     */
    public ?string $apiVersion = null;

    /**
     * Kind of object being referenced. Values defined by this API group are
     * "User", "Group", and "ServiceAccount". If the Authorizer does not
     * recognized the kind value, the Authorizer should report an error.
     */
    public string $kind;

    /**
     * Name of the object being referenced.
     */
    public string $name;

    /**
     * Namespace of the referenced object.  If the object kind is
     * non-namespace, such as "User" or "Group", and this value is not empty
     * the Authorizer should report an error.
     */
    public ?string $namespace = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
    }
}
