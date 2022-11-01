<?php

namespace Moonspot\Kubernetes\Objects;

class Subject extends \Moonspot\Kubernetes\BaseObject {

    /**
     * APIGroup holds the API group of the referenced subject. Defaults to ""
     * for ServiceAccount subjects. Defaults to "rbac.authorization.k8s.io" for
     * User and Group subjects.
     */
    public ?string $apiGroup = null;

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
}
